<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddDdkMemberAuthorityQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "pid")
	*/
	private $pid;

	/**
	* @JsonProperty(String, "custom_parameters")
	*/
	private $customParameters;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "pid", $this->pid);
		$this->setUserParam($params, "custom_parameters", $this->customParameters);

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
		return "pdd.ddk.member.authority.query";
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
	}

	public function setCustomParameters($customParameters)
	{
		$this->customParameters = $customParameters;
	}

}
