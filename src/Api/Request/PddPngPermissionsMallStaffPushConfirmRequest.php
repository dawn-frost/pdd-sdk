<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddPngPermissionsMallStaffPushConfirmRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "from_mall_id")
	*/
	private $fromMallId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "from_mall_id", $this->fromMallId);

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
		return "pdd.png.permissions.mall.staff.push.confirm";
	}

	public function setFromMallId($fromMallId)
	{
		$this->fromMallId = $fromMallId;
	}

}
