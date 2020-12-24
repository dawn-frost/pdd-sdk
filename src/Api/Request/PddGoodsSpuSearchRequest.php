<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddGoodsSpuSearchRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "cat_id")
	*/
	private $catId;

	/**
	* @JsonProperty(List<\DawnFrost\Pdd\Api\Request\PddGoodsSpuSearchRequest_KeyPropItem>, "key_prop")
	*/
	private $keyProp;

	/**
	* @JsonProperty(String, "spu_name")
	*/
	private $spuName;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "cat_id", $this->catId);
		$this->setUserParam($params, "key_prop", $this->keyProp);
		$this->setUserParam($params, "spu_name", $this->spuName);

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
		return "pdd.goods.spu.search";
	}

	public function setCatId($catId)
	{
		$this->catId = $catId;
	}

	public function setKeyProp($keyProp)
	{
		$this->keyProp = $keyProp;
	}

	public function setSpuName($spuName)
	{
		$this->spuName = $spuName;
	}

}

class PddGoodsSpuSearchRequest_KeyPropItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Long, "ref_pid")
	*/
	private $refPid;

	/**
	* @JsonProperty(String, "value_unit")
	*/
	private $valueUnit;

	/**
	* @JsonProperty(String, "value")
	*/
	private $value;

	/**
	* @JsonProperty(Long, "vid")
	*/
	private $vid;

	public function setRefPid($refPid)
	{
		$this->refPid = $refPid;
	}

	public function setValueUnit($valueUnit)
	{
		$this->valueUnit = $valueUnit;
	}

	public function setValue($value)
	{
		$this->value = $value;
	}

	public function setVid($vid)
	{
		$this->vid = $vid;
	}

}
