<?php
class Comments extends Model {
	protected $table = 'comments';

	protected $relationships = array(
		'Bug' => array(
			'model' => 'Bugs',	
			'relation_key' => 'bug_id',
			'key' => 'id'
		),

		'User' => array(
			'model' => 'Users',
			'key' => 'user_id',
			),
		'Likes' => array(
			'model' => 'CommentLikes',
			'key' => 'comment_id'
		),
		'Dislikes' => array(
			'model' => 'CommentDislikes',
			'key' => 'comment_id'
		),
	);

	public function getCreationDate() {
		return PrettyTime(strtotime($this->created_at));
	}
}

?>
