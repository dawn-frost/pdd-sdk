<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddFdsWaybillCancelRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(\DawnFrost\Pdd\Api\Request\PddFdsWaybillCancelRequest_InnerPddFdsWaybillCancelRequest, "pdd_fds_waybill_cancel_request")
	*/
	private $pddFdsWaybillCancelRequest;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "pdd_fds_waybill_cancel_request", $this->pddFdsWaybillCancelRequest);

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
		return "pdd.fds.waybill.cancel";
	}

	public function setPddFdsWaybillCancelRequest($pddFdsWaybillCancelRequest)
	{
		$this->pddFdsWaybillCancelRequest = $pddFdsWaybillCancelRequest;
	}

}

class PddFdsWaybillCancelRequest_InnerPddFdsWaybillCancelRequest extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "mall_mask_id")
	*/
	private $mallMaskId;

	/**
	* @JsonProperty(String, "order_mask_sn")
	*/
	private $orderMaskSn;

	/**
	* @JsonProperty(String, "waybill_code")
	*/
	private $waybillCode;

	/**
	* @JsonProperty(String, "wp_code")
	*/
	private $wpCode;

	public function setMallMaskId($mallMaskId)
	{
		$this->mallMaskId = $mallMaskId;
	}

	public function setOrderMaskSn($orderMaskSn)
	{
		$this->orderMaskSn = $orderMaskSn;
	}

	public function setWaybillCode($waybillCode)
	{
		$this->waybillCode = $waybillCode;
	}

	public function setWpCode($wpCode)
	{
		$this->wpCode = $wpCode;
	}

}
