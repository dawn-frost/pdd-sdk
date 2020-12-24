<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddPngPermissionsMallStaffPushApplyRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "to_mall_id")
	*/
	private $toMallId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "to_mall_id", $this->toMallId);

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
		return "pdd.png.permissions.mall.staff.push.apply";
	}

	public function setToMallId($toMallId)
	{
		$this->toMallId = $toMallId;
	}

}
