<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddPmcUserCancelRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "owner_id")
	*/
	private $ownerId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "owner_id", $this->ownerId);

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
		return "pdd.pmc.user.cancel";
	}

	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
	}

}
