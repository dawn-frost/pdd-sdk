<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiKeywordRelevanceGetRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "goodsId")
     */
    private $goodsId;

    /**
     * @JsonProperty(List<String>, "words")
     */
    private $words;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'goodsId', $this->goodsId);
        $this->setUserParam($params, 'words', $this->words);
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
        return 'pdd.ad.api.keyword.relevance.get';
    }

    public function setGoodsId($goodsId)
    {
        $this->goodsId = $goodsId;
    }

    public function setWords($words)
    {
        $this->words = $words;
    }
}
