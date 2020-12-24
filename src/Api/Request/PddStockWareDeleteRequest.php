<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddStockWareDeleteRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "ware_id")
	*/
	private $wareId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "ware_id", $this->wareId);

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
		return "pdd.stock.ware.delete";
	}

	public function setWareId($wareId)
	{
		$this->wareId = $wareId;
	}

}
