<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiUnitCreativeQueryFlowRateRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "adId")
     */
    private $adId;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'adId', $this->adId);
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
        return 'pdd.ad.api.unit.creative.query.flow.rate';
    }

    public function setAdId($adId)
    {
        $this->adId = $adId;
    }
}
