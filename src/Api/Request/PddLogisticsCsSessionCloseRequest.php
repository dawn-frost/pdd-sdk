<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddLogisticsCsSessionCloseRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "session_id")
	*/
	private $sessionId;

	/**
	* @JsonProperty(String, "wp_session_id")
	*/
	private $wpSessionId;

	/**
	* @JsonProperty(String, "action_time")
	*/
	private $actionTime;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "session_id", $this->sessionId);
		$this->setUserParam($params, "wp_session_id", $this->wpSessionId);
		$this->setUserParam($params, "action_time", $this->actionTime);

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
		return "pdd.logistics.cs.session.close";
	}

	public function setSessionId($sessionId)
	{
		$this->sessionId = $sessionId;
	}

	public function setWpSessionId($wpSessionId)
	{
		$this->wpSessionId = $wpSessionId;
	}

	public function setActionTime($actionTime)
	{
		$this->actionTime = $actionTime;
	}

}
