<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddLogisticsCsHistoryMessageGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "session_id")
	*/
	private $sessionId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "session_id", $this->sessionId);

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
		return "pdd.logistics.cs.history.message.get";
	}

	public function setSessionId($sessionId)
	{
		$this->sessionId = $sessionId;
	}

}
