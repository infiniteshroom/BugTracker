<?php
class Users extends Model {
	protected $table = 'users';

	protected $relationships = array(
		'Group' => array(
			'model' => 'UserGroups',
			'key' => 'group_id'
			),

		'Comments' => array(
			'model' => 'Comments',
			'relation_key' => 'id',
			'key' => 'user_id',
			),
	);


	public function getRegisterDate() {
		return PrettyTime(strtotime($this->created_at));
	}

	public function getAvatarLink() {
		$base = Application::Path('web');
		$avatar = 'default';

		if($this->avatar != null) {
			$avatar = $this->avatar;
		}

		$path = $base . '/assets/default/images/avatars/' . $avatar;

		return $path;
	}
}

?>
