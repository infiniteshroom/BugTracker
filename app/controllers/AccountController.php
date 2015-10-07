<?php
Application::Import('Bugtracker::Misc::misc.php');
Application::Import('Valitron::Validator::Validator.php');

	class AccountController extends Controller {

		public function get_signup() {
			
			if(Auth::IsGuest() == false) {
				return $this->response->Redirect('/');
			}


			return array(
				'switch_nonav' => true,
			);			
		}

		public function post_signup() {
			if(Auth::IsGuest() == false) {
				return $this->response->Redirect('/');
			}

			$name = strip_tags($this->request->Form('name'));
			$username = strip_tags($this->request->Form('username'));
			$password = strip_tags($this->request->Form('password'));
			$email = strip_tags($this->request->Form('email'));

			$v = new Validator(array(
				'name' => $name, 
				'username' => $username,
				'password' => $password,
				'email' => $email,
			));

			$v->rule('required', ['name', 'username', 'password' ,'email']);
			$v->rule('email', 'email');

			if($v->validate()) {

				$users = Users::where(array('username', '=', $username))->count();
				$emails = Users::where(array('email', '=', $email))->count();

				if($users > 0) {
					return array(
			    		'errors' => array('taken' => 'Username is already taken', 'username' => ''),
			    		'switch_nonav' => true,
			    		'username' => $username,
			    		'name' => $name,
			    		'password' => $password,
			    		'email' => $email,
			    	);
				}

				else if($emails > 0) {
					
					return array(
			    		'errors' => array('taken' => 'An Account exists with that email address', 'email' => ''),
			    		'switch_nonav' => true,
			    		'username' => $username,
			    		'name' => $name,
			    		'password' => $password,
			    		'email' => $email,
			    	);	
				}

				/* all ok let's add the account */

				/* break up full name */
				$name_parts = explode(' ', $name);

				$user = new Users();
				$user->email = $email;
				$user->password = Password::Create($password);
				$user->username = $username;
				$user->group_id = 2;

				if(count($name_parts) == 3) {
					$user->first_name = $name_parts[0];
					$user->middle_name = $name_parts[1];
					$user->last_name = $name_parts[2];
				}

				else if(count($name_parts) == 2) {
					$user->first_name = $name_parts[0];
					$user->last_name = $name_parts[1];
				}

				else if(count($name_parts) == 1) {
					$user->first_name = $name_parts[0];
				}

				else {
					/* get last index of name_parts */
					end($name_parts);
					$key = key($name_parts);

					$user->last_name = $name_parts[$key];

					unset($name_parts[$key]);
					$user->first_name = implode(' ', $name_parts);

				}

				
				$user->Create();

				return $this->response->Redirect('/account/login/');
			}

			else {
				return array(
		    		'errors' => $v->errors(),
		    		'switch_nonav' => true,
		    		'username' => $username,
		    		'name' => $name,
		    		'password' => $password,
		    		'email' => $email,
		    	);
			}

		}

		public function get_login() {
			return array(
				'switch_nonav' => true,
			);
		}

		public function get_settings() {
			if(Auth::IsGuest()) {
				return $this->response->Redirect('/account/login/');
			}
		}

		public function post_settings() {
			if(Auth::IsGuest()) {
				return $this->response->Redirect('/account/login/');
			}

			$first_name = strip_tags($this->request->Form('firstname'));
			$middle_name = strip_tags($this->request->Form('middlename'));
			$last_name = strip_tags($this->request->Form('lastname'));
			$email = strip_tags($this->request->Form('email'));
			$website = strip_tags($this->request->Form('website'));
			$twitter = strip_tags($this->request->Form('twitter'));
			$facebook = strip_tags($this->request->Form('facebook'));
			$bio = strip_tags($this->request->Form('about'));
			$avatar = $this->request->Files('avatar');

			$v = new Validator(array(
				'firstname' => $first_name, 
				'lastname' => $last_name,
				'email' => $email,
			));

			$v->rule('required', ['firstname', 'lastname', 'email']);
			$v->rule('email', 'email');


			if($v->validate()) {
			    $user = Users::find(Auth::User()->id);
			    $user->first_name = $first_name;
			    $user->middle_name = $middle_name;
			    $user->last_name = $last_name;
			    $user->email = $email;
			    $user->website = $website;
			    $user->twitter = $twitter;
			    $user->facebook = $facebook;
			    $user->bio = $bio;

			    if($avatar['tmp_name'] != "") {
			    	$image_id = md5(uniqid());

			    	move_uploaded_file($avatar['tmp_name'], Application::Path('assets') . 'default/images/avatars/' . $image_id);

			    	$user->avatar = $image_id;
			    }

			    $user->Save();

			    return array(
			    	'success' => true,
			    );
			}

			else {
				return array(
		    		'errors' => $v->errors(),
		    	);
			} 

		}

		public function post_login() {
			$username = strip_tags($this->request->Form('username'));
			$password = strip_tags($this->request->Form('password'));

			$v = new Validator(array(
				'username' => $username, 
				'password' => $password
			));

			$v->rule('required', ['username', 'password']);

			if($v->validate()) {
			    /* perform login */

			    if(Auth::Login($username, $password) == false) {
			    
			    	return array(
		    			'errors' => array('login' => 'Details are incorrect or the account does not exist.'),
		    			'switch_nonav' => true,
		    		);	
			    }

			    else {
			    	return $this->response->Redirect('/');
			    }
			}

			else {
				return array(
		    		'errors' => $v->errors(),
		    		'switch_nonav' => true,
		    	);
			} 
		}

		public function any_logout() {
			Auth::Logout();

			$this->response->Redirect('/');
		}
	}
?>
