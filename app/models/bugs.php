<?php
class Bugs extends Model {
	protected $table = 'bugs';

	protected $relationships = array(
		'Status' => array(
			'model' => 'Status',
			'relation_key' => 'status_id',
			'key' => 'id',
			),

		'User' => array(
			'model' => 'Users',
			'relation_key' => 'user_id',
			'key' => 'id',
			),
		
		'Version' => array(
			'model' => 'Versions',
			'relation_key' => 'version_id',
			'key' => 'id',
			),

		'Type' => array(
			'model' => 'Types',
			'relation_key' => 'type_id',
			'key' => 'id',
		),

		'Priority' => array(
			'model' => 'Priorities',
			'relation_key' => 'priority_id',
			'key' => 'id',
		),

		'Component' => array(
			'model' => 'Components',
			'relation_key' => 'component_id',
			'key' => 'id',
		),

		'Milestone' => array(
			'model' => 'Milestones',
			'relation_key' => 'milestone_id',
			'key' => 'id',
		),

		'Comments' => array(
			'model' => 'Comments',
			'key' => 'bug_id',
		),

	);

	public function getShortDescription() {
		/* truncate description */

		return substr(strip_tags($this->contents), 0, 120);
	}

	public function isOwner() {
		if(Auth::User()->id == $this->user_id) {
			return true;
		}

		else {
			return false;
		}
	}

	function getFormattedDate()
	{
	    $etime = time() - strtotime($this->created_at);

	    if ($etime < 1)
	    {
	        return '0 seconds';
	    }

	    $a = array( 12 * 30 * 24 * 60 * 60  =>  'year',
	                30 * 24 * 60 * 60       =>  'month',
	                24 * 60 * 60            =>  'day',
	                60 * 60                 =>  'hour',
	                60                      =>  'minute',
	                1                       =>  'second'
	                );

	    foreach ($a as $secs => $str)
	    {
	        $d = $etime / $secs;
	        if ($d >= 1)
	        {
	            $r = round($d);
	            return $r . ' ' . $str . ($r > 1 ? 's' : '') . ' ago';
	        }
	    }
	}
}

?>
