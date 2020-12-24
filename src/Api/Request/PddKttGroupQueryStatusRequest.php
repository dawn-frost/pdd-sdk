<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddKttGroupQueryStatusRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "activity_no")
	*/
	private $activityNo;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "activity_no", $this->activityNo);

	}

	public function getVersion()
	{
		return "V1";
	}

	public function getDataType()
	{
		return "JSON";
	}

	public function getType()
	{
		return "pdd.ktt.group.query.status";
	}

	public function setActivityNo($activityNo)
	{
		$this->activityNo = $activityNo;
	}

}
