<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiGoodsQueryGalleryImagesRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "goodsId")
     */
    private $goodsId;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'goodsId', $this->goodsId);
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
        return 'pdd.ad.api.goods.query.gallery.images';
    }

    public function setGoodsId($goodsId)
    {
        $this->goodsId = $goodsId;
    }
}
