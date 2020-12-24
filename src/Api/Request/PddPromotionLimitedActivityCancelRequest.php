<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddPromotionLimitedActivityCancelRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "detail_id")
	*/
	private $detailId;

	/**
	* @JsonProperty(Long, "goods_id")
	*/
	private $goodsId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "detail_id", $this->detailId);
		$this->setUserParam($params, "goods_id", $this->goodsId);

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
		return "pdd.promotion.limited.activity.cancel";
	}

	public function setDetailId($detailId)
	{
		$this->detailId = $detailId;
	}

	public function setGoodsId($goodsId)
	{
		$this->goodsId = $goodsId;
	}

}
