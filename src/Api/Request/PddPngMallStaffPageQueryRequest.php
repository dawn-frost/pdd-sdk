<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddPngMallStaffPageQueryRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "limit")
	*/
	private $limit;

	/**
	* @JsonProperty(Long, "start_id")
	*/
	private $startId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "limit", $this->limit);
		$this->setUserParam($params, "start_id", $this->startId);

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
		return "pdd.png.mall.staff.page.query";
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
	}

	public function setStartId($startId)
	{
		$this->startId = $startId;
	}

}
