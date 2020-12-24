<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddTicketVerificationNotifycationRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "order_no")
	*/
	private $orderNo;

	/**
	* @JsonProperty(Long, "verify_time")
	*/
	private $verifyTime;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "order_no", $this->orderNo);
		$this->setUserParam($params, "verify_time", $this->verifyTime);

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
		return "pdd.ticket.verification.notifycation";
	}

	public function setOrderNo($orderNo)
	{
		$this->orderNo = $orderNo;
	}

	public function setVerifyTime($verifyTime)
	{
		$this->verifyTime = $verifyTime;
	}

}
