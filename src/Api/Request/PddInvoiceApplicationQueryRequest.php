<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddInvoiceApplicationQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "order_sn")
	*/
	private $orderSn;

	/**
	* @JsonProperty(Integer, "page")
	*/
	private $page;

	/**
	* @JsonProperty(Integer, "page_size")
	*/
	private $pageSize;

	/**
	* @JsonProperty(Integer, "status")
	*/
	private $status;

	/**
	* @JsonProperty(Long, "update_end_time")
	*/
	private $updateEndTime;

	/**
	* @JsonProperty(Long, "update_start_time")
	*/
	private $updateStartTime;

	/**
	* @JsonProperty(Integer, "quality_goods_invoice")
	*/
	private $qualityGoodsInvoice;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "order_sn", $this->orderSn);
		$this->setUserParam($params, "page", $this->page);
		$this->setUserParam($params, "page_size", $this->pageSize);
		$this->setUserParam($params, "status", $this->status);
		$this->setUserParam($params, "update_end_time", $this->updateEndTime);
		$this->setUserParam($params, "update_start_time", $this->updateStartTime);
		$this->setUserParam($params, "quality_goods_invoice", $this->qualityGoodsInvoice);

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
		return "pdd.invoice.application.query";
	}

	public function setOrderSn($orderSn)
	{
		$this->orderSn = $orderSn;
	}

	public function setPage($page)
	{
		$this->page = $page;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
	}

	public function setStatus($status)
	{
		$this->status = $status;
	}

	public function setUpdateEndTime($updateEndTime)
	{
		$this->updateEndTime = $updateEndTime;
	}

	public function setUpdateStartTime($updateStartTime)
	{
		$this->updateStartTime = $updateStartTime;
	}

	public function setQualityGoodsInvoice($qualityGoodsInvoice)
	{
		$this->qualityGoodsInvoice = $qualityGoodsInvoice;
	}

}
