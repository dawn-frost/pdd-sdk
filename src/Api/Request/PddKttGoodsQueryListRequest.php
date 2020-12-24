<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddKttGoodsQueryListRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Integer, "page")
	*/
	private $page;

	/**
	* @JsonProperty(Integer, "size")
	*/
	private $size;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "page", $this->page);
		$this->setUserParam($params, "size", $this->size);

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
		return "pdd.ktt.goods.query.list";
	}

	public function setPage($page)
	{
		$this->page = $page;
	}

	public function setSize($size)
	{
		$this->size = $size;
	}

}
