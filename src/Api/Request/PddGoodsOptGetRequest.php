<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

// 获得拼多多商品标签列表（非商品类目cat，当前仅开放给多多客使用）
class PddGoodsOptGetRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Integer, "parent_opt_id")
     */
    private $parentOptId;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'parent_opt_id', $this->parentOptId);
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
        return 'pdd.goods.opt.get';
    }

    public function setParentOptId($parentOptId)
    {
        $this->parentOptId = $parentOptId;
    }
}
