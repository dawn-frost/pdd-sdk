<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiUnitCreativeCheckTitleRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "goodsId")
     */
    private $goodsId;

    /**
     * @JsonProperty(String, "title")
     */
    private $title;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'goodsId', $this->goodsId);
        $this->setUserParam($params, 'title', $this->title);
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
        return 'pdd.ad.api.unit.creative.check.title';
    }

    public function setGoodsId($goodsId)
    {
        $this->goodsId = $goodsId;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}
