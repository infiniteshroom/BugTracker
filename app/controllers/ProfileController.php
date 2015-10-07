<?php
	Application::Import('Bugtracker::Misc::misc.php');
	class ProfileController extends Controller {
	public function any_view($username) {

			$user = Users::where(array('username', '=', $username))->results('one');

			if($user == null || $username == null) {
				$this->SetView('profile::error');
			}

			else {
				return array(
					'user' => $user,
				);
			}
		}
	}
?>