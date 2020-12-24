<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddExpressDepotListGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "length")
	*/
	private $length;

	/**
	* @JsonProperty(Long, "start")
	*/
	private $start;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "length", $this->length);
		$this->setUserParam($params, "start", $this->start);

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
		return "pdd.express.depot.list.get";
	}

	public function setLength($length)
	{
		$this->length = $length;
	}

	public function setStart($start)
	{
		$this->start = $start;
	}

}
