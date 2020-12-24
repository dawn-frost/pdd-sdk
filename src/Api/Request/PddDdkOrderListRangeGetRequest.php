<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddDdkOrderListRangeGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "end_time")
	*/
	private $endTime;

	/**
	* @JsonProperty(String, "last_order_id")
	*/
	private $lastOrderId;

	/**
	* @JsonProperty(Integer, "page_size")
	*/
	private $pageSize;

	/**
	* @JsonProperty(Integer, "query_order_type")
	*/
	private $queryOrderType;

	/**
	* @JsonProperty(String, "start_time")
	*/
	private $startTime;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "end_time", $this->endTime);
		$this->setUserParam($params, "last_order_id", $this->lastOrderId);
		$this->setUserParam($params, "page_size", $this->pageSize);
		$this->setUserParam($params, "query_order_type", $this->queryOrderType);
		$this->setUserParam($params, "start_time", $this->startTime);

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
		return "pdd.ddk.order.list.range.get";
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
	}

	public function setLastOrderId($lastOrderId)
	{
		$this->lastOrderId = $lastOrderId;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}

	public function setQueryOrderType($queryOrderType)
	{
		$this->queryOrderType = $queryOrderType;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
	}

}
