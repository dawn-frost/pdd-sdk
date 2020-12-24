<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddFlightOrderQuerysnRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "trace_id")
	*/
	private $traceId;

	/**
	* @JsonProperty(String, "travel_sn")
	*/
	private $travelSn;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "trace_id", $this->traceId);
		$this->setUserParam($params, "travel_sn", $this->travelSn);

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
		return "pdd.flight.order.querysn";
	}

	public function setTraceId($traceId)
	{
		$this->traceId = $traceId;
	}

	public function setTravelSn($travelSn)
	{
		$this->travelSn = $travelSn;
	}

}
