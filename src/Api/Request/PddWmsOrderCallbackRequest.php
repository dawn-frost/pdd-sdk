<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddWmsOrderCallbackRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(\DawnFrost\Pdd\Api\Request\PddWmsOrderCallbackRequest_Request, "request")
	*/
	private $request;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "request", $this->request);

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
		return "pdd.wms.order.callback";
	}

	public function setRequest($request)
	{
		$this->request = $request;
	}

}

class PddWmsOrderCallbackRequest_Request extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "deliveryOrderCode")
	*/
	private $deliveryOrderCode;

	/**
	* @JsonProperty(String, "orderType")
	*/
	private $orderType;

	/**
	* @JsonProperty(String, "ownerCode")
	*/
	private $ownerCode;

	/**
	* @JsonProperty(String, "warehouseCode")
	*/
	private $warehouseCode;

	public function setDeliveryOrderCode($deliveryOrderCode)
	{
		$this->deliveryOrderCode = $deliveryOrderCode;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
	}

	public function setOwnerCode($ownerCode)
	{
		$this->ownerCode = $ownerCode;
	}

	public function setWarehouseCode($warehouseCode)
	{
		$this->warehouseCode = $warehouseCode;
	}

}
