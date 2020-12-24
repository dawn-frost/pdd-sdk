<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiUnitBidQueryBaseTargetProfileRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "goodsId")
     */
    private $goodsId;

    /**
     * @JsonProperty(Integer, "scenesType")
     */
    private $scenesType;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'goodsId', $this->goodsId);
        $this->setUserParam($params, 'scenesType', $this->scenesType);
    }

    public function getVersion()
    {
        return 'V1';
    }

    public function getDataType()
    {
        return 'JSON';
    }

    public function getType()
    {
        return 'pdd.ad.api.unit.bid.query.base.target.profile';
    }

    public function setGoodsId($goodsId)
    {
        $this->goodsId = $goodsId;
    }

    public function setScenesType($scenesType)
    {
        $this->scenesType = $scenesType;
    }
}
