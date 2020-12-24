<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddTrainGrabCancelRequest extends PopBaseHttpRequest
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

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "order_id", $this->orderId);
		$this->setUserParam($params, "pdd_order_id", $this->pddOrderId);

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
		return "pdd.train.grab.cancel";
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
	}

	public function setPddOrderId($pddOrderId)
	{
		$this->pddOrderId = $pddOrderId;
	}

}
