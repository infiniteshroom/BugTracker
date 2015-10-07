<?php
Application::Import('Valitron::Validator::Validator.php');
Application::Import('Bugtracker::Misc::misc.php');

	class TicketController extends Controller {
		public function any_index() {
			$this->Set(
				array(
					'bugs' => Bugs::orderby('created_at', 'desc'), 
					'status_types' => Status::results(),
					)
			);
		}

		public function post_delete($id) {
			$bug = Bugs::Find($id);

			if($id == null || $bug->id == null) {
				$this->SetView('ticket::error');
			}

			else {
				$bug->Delete();

				return $this->response->Redirect('/');
			}
		}


		public function get_delete($id) {
			$bug = Bugs::Find($id);

			if($id == null || $bug->id == null) {
				$this->SetView('ticket::error');
			}

			else {
				$this->Set(array(
					'bug' => $bug,
				));
			}
		}

		public function any_view($id) {

			$bug = Bugs::Find($id);
			if($id == null || $bug->id == null) {
				$this->SetView('ticket::error');
			}

			else {
				$this->Set(array(
					'bug' => $bug,
				));
			}
		}

		public function get_edit($id) {

			$bug = Bugs::find($id);

			/* if guest redirect to login */
			if(Auth::IsGuest()) {
				return $this->response->Redirect('/account/login/');
			}

			if($id == null || $bug->id == null) {
				$this->SetView('ticket::error');
			}

			$this->Set(
				array(
					'versions' => Versions::results(), 
					'components' => Components::results(),
					'status' => Status::results(),
					'types' => Types::results(),
					'users' => Users::results(),
					'priorities' => Priorities::results(),
					'bug' => $bug,
					)
			);
		}

		public function post_edit($id) {

			$bug = Bugs::find($id);

			/* if guest redirect to login */
			if(Auth::IsGuest()) {
				return $this->response->Redirect('/account/login/');
			}

			if($id == null || $bug->id == null) {
				$this->SetView('ticket::error');
			}

			$title = strip_tags($this->request->Form('title'));
			$content = $this->request->Form('content');
			$version = strip_tags($this->request->Form('version'));
			$component = strip_tags($this->request->Form('component'));
			$assign = strip_tags($this->request->Form('assign'));
			$type = strip_tags($this->request->Form('type'));
			$status = strip_tags($this->request->Form('status'));
			$priority = strip_tags($this->request->Form('priority'));

			$v = new Validator(array(
				'title' => $title, 
				'content' => $content
			));

			$v->rule('required', ['title', 'content']);

			if($v->validate()) {
			    $bug->status_id = $status;
			    $bug->user_id = Auth::User()->id;

			    if($bug->assign_id == -1) {
				    $bug->assign_id = "";
				}

				else {
					$bug->assign_id = $assign;
				}

				$bug->version_id = $version;
				$bug->title = $title;
				$bug->contents = $content;
				$bug->type_id = $type;
				$bug->priority_id = $priority;
				$bug->component_id = $component;
				$bug->milestone_id = "";
				$bug->Save();

			    return $this->response->Redirect('/');
			}

			else {
				return array(
		    		'errors' => $v->errors(),
		    		'versions' => Versions::results(), 
					'components' => Components::results(),
					'status' => Status::results(),
					'types' => Types::results(),
					'users' => Users::results(),
					'priorities' => Priorities::results(),
					'bug' => $bug,
		    	);
			} 
		}

		public function get_create() {

			/* if guest redirect to login */
			if(Auth::IsGuest()) {
				return $this->response->Redirect('/account/login/');
			}

			$this->Set(
				array(
					'versions' => Versions::results(), 
					'components' => Components::results(),
					'status' => Status::results(),
					'types' => Types::results(),
					'users' => Users::results(),
					'priorities' => Priorities::results(),

					)
			);
		}


		public function post_create() {

			/* if guest redirect to login */
			if(Auth::IsGuest()) {
				return $this->response->Redirect('/account/login/');
			}

			$title = strip_tags($this->request->Form('title'));
			$content = $this->request->Form('content');
			$version = strip_tags($this->request->Form('version'));
			$component = strip_tags($this->request->Form('component'));
			$assign = strip_tags($this->request->Form('assign'));
			$type = strip_tags($this->request->Form('type'));
			$status = strip_tags($this->request->Form('status'));
			$priority = strip_tags($this->request->Form('priority'));

			$v = new Validator(array(
				'title' => $title, 
				'content' => $content
			));

			$v->rule('required', ['title', 'content']);

			if($v->validate()) {
			    $bug = new Bugs();
			    $bug->status_id = $status;
			    $bug->user_id = Auth::User()->id;

			    if($bug->assign_id == -1) {
				    $bug->assign_id = "";
				}

				else {
					$bug->assign_id = $assign;
				}

				$bug->version_id = $version;
				$bug->title = $title;
				$bug->contents = $content;
				$bug->type_id = $type;
				$bug->priority_id = $priority;
				$bug->component_id = $component;
				$bug->milestone_id = "";
				$bug->Create();

			    return $this->response->Redirect('/');
			}

			else {
				return array(
		    		'errors' => $v->errors(),
		    		'versions' => Versions::results(), 
					'components' => Components::results(),
					'status' => Status::results(),
					'types' => Types::results(),
					'users' => Users::results(),
					'priorities' => Priorities::results(),
					'title' => $title,
					'content' => $content,
		    	);
			} 
		}
	}
?>