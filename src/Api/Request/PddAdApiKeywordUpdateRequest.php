<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddAdApiKeywordUpdateRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "adId")
     */
    private $adId;

    /**
     * @JsonProperty(List<\DawnFrost\Pdd\Api\Request\PddAdApiKeywordUpdateRequest_KeywordsItem>, "keywords")
     */
    private $keywords;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'adId', $this->adId);
        $this->setUserParam($params, 'keywords', $this->keywords);
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
        return 'pdd.ad.api.keyword.update';
    }

    public function setAdId($adId)
    {
        $this->adId = $adId;
    }

    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }
}

class PddAdApiKeywordUpdateRequest_KeywordsItem extends PopBaseJsonEntity
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "bid")
     */
    private $bid;

    /**
     * @JsonProperty(Long, "keywordId")
     */
    private $keywordId;

    /**
     * @JsonProperty(Long, "premiumRate")
     */
    private $premiumRate;

    public function setBid($bid)
    {
        $this->bid = $bid;
    }

    public function setKeywordId($keywordId)
    {
        $this->keywordId = $keywordId;
    }

    public function setPremiumRate($premiumRate)
    {
        $this->premiumRate = $premiumRate;
    }
}
