<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddVoucherOtaCardVerificationRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "card_no")
	*/
	private $cardNo;

	/**
	* @JsonProperty(Long, "store_id")
	*/
	private $storeId;

	/**
	* @JsonProperty(String, "store_name")
	*/
	private $storeName;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "card_no", $this->cardNo);
		$this->setUserParam($params, "store_id", $this->storeId);
		$this->setUserParam($params, "store_name", $this->storeName);

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
		return "pdd.voucher.ota.card.verification";
	}

	public function setCardNo($cardNo)
	{
		$this->cardNo = $cardNo;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
	}

	public function setStoreName($storeName)
	{
		$this->storeName = $storeName;
	}

}
