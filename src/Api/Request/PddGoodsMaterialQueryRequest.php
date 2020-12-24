<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddGoodsMaterialQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(List<Long>, "goods_id_list")
	*/
	private $goodsIdList;

	/**
	* @JsonProperty(List<Long>, "type_list")
	*/
	private $typeList;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "goods_id_list", $this->goodsIdList);
		$this->setUserParam($params, "type_list", $this->typeList);

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
		return "pdd.goods.material.query";
	}

	public function setGoodsIdList($goodsIdList)
	{
		$this->goodsIdList = $goodsIdList;
	}

	public function setTypeList($typeList)
	{
		$this->typeList = $typeList;
	}

}
