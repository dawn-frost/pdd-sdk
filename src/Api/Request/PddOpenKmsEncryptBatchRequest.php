<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddOpenKmsEncryptBatchRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<\DawnFrost\Pdd\Api\Request\PddOpenKmsEncryptBatchRequest_DataListItem>, "data_list")
	*/
	private $dataList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "data_list", $this->dataList);

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
		return "pdd.open.kms.encrypt.batch";
	}

	public function setDataList($dataList)
	{
		$this->dataList = $dataList;
	}

}

class PddOpenKmsEncryptBatchRequest_DataListItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "data")
	*/
	private $data;

	/**
	* @JsonProperty(Boolean, "search")
	*/
	private $search;

	/**
	* @JsonProperty(String, "type")
	*/
	private $type;

	public function setData($data)
	{
		$this->data = $data;
	}

	public function setSearch($search)
	{
		$this->search = $search;
	}

	public function setType($type)
	{
		$this->type = $type;
	}

}
