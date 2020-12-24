<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddDdkTopGoodsListQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "custom_parameters")
	*/
	private $customParameters;

	/**
	* @JsonProperty(Integer, "limit")
	*/
	private $limit;

	/**
	* @JsonProperty(String, "list_id")
	*/
	private $listId;

	/**
	* @JsonProperty(Integer, "offset")
	*/
	private $offset;

	/**
	* @JsonProperty(String, "p_id")
	*/
	private $pId;

	/**
	* @JsonProperty(Integer, "sort_type")
	*/
	private $sortType;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "custom_parameters", $this->customParameters);
		$this->setUserParam($params, "limit", $this->limit);
		$this->setUserParam($params, "list_id", $this->listId);
		$this->setUserParam($params, "offset", $this->offset);
		$this->setUserParam($params, "p_id", $this->pId);
		$this->setUserParam($params, "sort_type", $this->sortType);

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
		return "pdd.ddk.top.goods.list.query";
	}

	public function setCustomParameters($customParameters)
	{
		$this->customParameters = $customParameters;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
	}

	public function setListId($listId)
	{
		$this->listId = $listId;
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
	}

	public function setPId($pId)
	{
		$this->pId = $pId;
	}

	public function setSortType($sortType)
	{
		$this->sortType = $sortType;
	}

}
