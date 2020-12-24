<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddEinvoiceVendorRuihongMatchEnterpriseRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "appCode")
	*/
	private $appCode;

	/**
	* @JsonProperty(String, "cmdName")
	*/
	private $cmdName;

	/**
	* @JsonProperty(String, "sign")
	*/
	private $sign;

	/**
	* @JsonProperty(String, "customerName")
	*/
	private $customerName;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "appCode", $this->appCode);
		$this->setUserParam($params, "cmdName", $this->cmdName);
		$this->setUserParam($params, "sign", $this->sign);
		$this->setUserParam($params, "customerName", $this->customerName);

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
		return "pdd.einvoice.vendor.ruihong.match.enterprise";
	}

	public function setAppCode($appCode)
	{
		$this->appCode = $appCode;
	}

	public function setCmdName($cmdName)
	{
		$this->cmdName = $cmdName;
	}

	public function setSign($sign)
	{
		$this->sign = $sign;
	}

	public function setCustomerName($customerName)
	{
		$this->customerName = $customerName;
	}

}
