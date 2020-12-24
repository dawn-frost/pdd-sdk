<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddPopAuthTokenRefreshRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "refresh_token")
	*/
	private $refreshToken;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "refresh_token", $this->refreshToken);

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
		return "pdd.pop.auth.token.refresh";
	}

	public function setRefreshToken($refreshToken)
	{
		$this->refreshToken = $refreshToken;
	}

}
