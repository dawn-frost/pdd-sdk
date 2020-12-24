<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddGoodsSizespecTemplatesGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "class_id")
	*/
	private $classId;

	/**
	* @JsonProperty(Long, "limit")
	*/
	private $limit;

	/**
	* @JsonProperty(Long, "offset")
	*/
	private $offset;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "class_id", $this->classId);
		$this->setUserParam($params, "limit", $this->limit);
		$this->setUserParam($params, "offset", $this->offset);

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
		return "pdd.goods.sizespec.templates.get";
	}

	public function setClassId($classId)
	{
		$this->classId = $classId;
	}

	public function setLimit($limit)
	{
		$this->limit = $limit;
	}

	public function setOffset($offset)
	{
		$this->offset = $offset;
	}

}
