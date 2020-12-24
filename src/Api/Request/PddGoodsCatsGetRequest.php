<?php

namespace Com\Pdd\Pop\Sdk\Api\Request;

use Com\Pdd\Pop\Sdk\PopBaseHttpRequest;

// 获取拼多多标准商品类目信息（请使用pdd.goods.authorization.cats接口获取商家可发布类目）
class PddGoodsCatsGetRequest extends PopBaseHttpRequest
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
        $this->setUserParam($params, 'parent_cat_id', $this->parentCatId);
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
        return 'pdd.goods.cats.get';
    }

    public function setParentCatId($parentCatId)
    {
        $this->parentCatId = $parentCatId;
    }
}
