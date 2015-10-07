<?php
	Application::Import('Bugtracker::Misc::misc.php');
	class FilterController extends Controller {
	public function any_status($id) {

			$bugs = Bugs::where(array('status_id', '=', $id))->orderby('created_at', 'desc');

			return array(
					'bugs' => $bugs,
					'status' => Status::find($id),
					'status_types' => Status::results(),
			);
		}
	}
?>