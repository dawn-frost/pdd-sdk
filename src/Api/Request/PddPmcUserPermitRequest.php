<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddPmcUserPermitRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "topics")
	*/
	private $topics;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "topics", $this->topics);

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
		return "pdd.pmc.user.permit";
	}

	public function setTopics($topics)
	{
		$this->topics = $topics;
	}

}
