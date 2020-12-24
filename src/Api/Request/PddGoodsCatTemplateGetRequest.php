<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddGoodsCatTemplateGetRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "cat_id")
	*/
	private $catId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "cat_id", $this->catId);

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
		return "pdd.goods.cat.template.get";
	}

	public function setCatId($catId)
	{
		$this->catId = $catId;
	}

}
