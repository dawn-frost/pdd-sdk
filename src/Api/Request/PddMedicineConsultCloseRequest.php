<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddMedicineConsultCloseRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "consult_no")
	*/
	private $consultNo;

	/**
	* @JsonProperty(String, "reason")
	*/
	private $reason;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "consult_no", $this->consultNo);
		$this->setUserParam($params, "reason", $this->reason);

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
		return "pdd.medicine.consult.close";
	}

	public function setConsultNo($consultNo)
	{
		$this->consultNo = $consultNo;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
	}

}
