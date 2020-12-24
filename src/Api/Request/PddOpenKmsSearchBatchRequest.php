<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddOpenKmsSearchBatchRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<\DawnFrost\Pdd\Api\Request\PddOpenKmsSearchBatchRequest_InputListItem>, "input_list")
	*/
	private $inputList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "input_list", $this->inputList);

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
		return "pdd.open.kms.search.batch";
	}

	public function setInputList($inputList)
	{
		$this->inputList = $inputList;
	}

}

class PddOpenKmsSearchBatchRequest_InputListItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "input")
	*/
	private $input;

	/**
	* @JsonProperty(String, "type")
	*/
	private $type;

	public function setInput($input)
	{
		$this->input = $input;
	}

	public function setType($type)
	{
		$this->type = $type;
	}

}
