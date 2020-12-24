<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddTrainConfirmPayRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "order_id")
	*/
	private $orderId;

	/**
	* @JsonProperty(String, "pdd_order_id")
	*/
	private $pddOrderId;

	/**
	* @JsonProperty(List<\DawnFrost\Pdd\Api\Request\PddTrainConfirmPayRequest_OrderInfosItem>, "order_infos")
	*/
	private $orderInfos;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "order_id", $this->orderId);
		$this->setUserParam($params, "pdd_order_id", $this->pddOrderId);
		$this->setUserParam($params, "order_infos", $this->orderInfos);

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
		return "pdd.train.confirm.pay";
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
	}

	public function setPddOrderId($pddOrderId)
	{
		$this->pddOrderId = $pddOrderId;
	}

	public function setOrderInfos($orderInfos)
	{
		$this->orderInfos = $orderInfos;
	}

}

class PddTrainConfirmPayRequest_OrderInfosItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "travel_sn")
	*/
	private $travelSn;

	/**
	* @JsonProperty(String, "mall_order")
	*/
	private $mallOrder;

	/**
	* @JsonProperty(String, "order_sn")
	*/
	private $orderSn;

	public function setTravelSn($travelSn)
	{
		$this->travelSn = $travelSn;
	}

	public function setMallOrder($mallOrder)
	{
		$this->mallOrder = $mallOrder;
	}

	public function setOrderSn($orderSn)
	{
		$this->orderSn = $orderSn;
	}

}
