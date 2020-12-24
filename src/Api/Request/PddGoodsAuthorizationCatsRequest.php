<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddGoodsAuthorizationCatsRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "parent_cat_id")
	*/
	private $parentCatId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "parent_cat_id", $this->parentCatId);

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
		return "pdd.goods.authorization.cats";
	}

	public function setParentCatId($parentCatId)
	{
		$this->parentCatId = $parentCatId;
	}

}
