<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddKttGoodsCreateSpecRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<\DawnFrost\Pdd\Api\Request\PddKttGoodsCreateSpecRequest_tring, List<String>>, "spec_map")
	*/
	private $specMap;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "spec_map", $this->specMap);

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
		return "pdd.ktt.goods.create.spec";
	}

	public function setSpecMap($specMap)
	{
		$this->specMap = $specMap;
	}

}
