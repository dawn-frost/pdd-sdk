<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddTrainTicketRefundRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "sub_order_id")
	*/
	private $subOrderId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "sub_order_id", $this->subOrderId);

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
		return "pdd.train.ticket.refund";
	}

	public function setSubOrderId($subOrderId)
	{
		$this->subOrderId = $subOrderId;
	}

}
