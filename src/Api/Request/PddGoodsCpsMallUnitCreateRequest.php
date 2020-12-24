<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddGoodsCpsMallUnitCreateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "rate")
	*/
	private $rate;

	/**
	* @JsonProperty(String, "erp_code")
	*/
	private $erpCode;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "rate", $this->rate);
		$this->setUserParam($params, "erp_code", $this->erpCode);

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
		return "pdd.goods.cps.mall.unit.create";
	}

	public function setRate($rate)
	{
		$this->rate = $rate;
	}

	public function setErpCode($erpCode)
	{
		$this->erpCode = $erpCode;
	}

}
