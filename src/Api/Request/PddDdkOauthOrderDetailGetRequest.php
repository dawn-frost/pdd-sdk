<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddDdkOauthOrderDetailGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "order_sn")
	*/
	private $orderSn;

	/**
	* @JsonProperty(Integer, "query_order_type")
	*/
	private $queryOrderType;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "order_sn", $this->orderSn);
		$this->setUserParam($params, "query_order_type", $this->queryOrderType);

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
		return "pdd.ddk.oauth.order.detail.get";
	}

	public function setOrderSn($orderSn)
	{
		$this->orderSn = $orderSn;
	}

	public function setQueryOrderType($queryOrderType)
	{
		$this->queryOrderType = $queryOrderType;
	}

}
