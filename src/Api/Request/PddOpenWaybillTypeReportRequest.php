<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddOpenWaybillTypeReportRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<String>, "order_sn_list")
	*/
	private $orderSnList;

	/**
	* @JsonProperty(Integer, "waybill_type")
	*/
	private $waybillType;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "order_sn_list", $this->orderSnList);
		$this->setUserParam($params, "waybill_type", $this->waybillType);

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
		return "pdd.open.waybill.type.report";
	}

	public function setOrderSnList($orderSnList)
	{
		$this->orderSnList = $orderSnList;
	}

	public function setWaybillType($waybillType)
	{
		$this->waybillType = $waybillType;
	}

}
