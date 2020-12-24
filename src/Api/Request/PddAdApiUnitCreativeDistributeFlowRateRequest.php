<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiUnitCreativeDistributeFlowRateRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "adId")
     */
    private $adId;

    /**
     * @JsonProperty(Integer, "creativeFlowRate")
     */
    private $creativeFlowRate;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'adId', $this->adId);
        $this->setUserParam($params, 'creativeFlowRate', $this->creativeFlowRate);
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
        return 'pdd.ad.api.unit.creative.distribute.flow.rate';
    }

    public function setAdId($adId)
    {
        $this->adId = $adId;
    }

    public function setCreativeFlowRate($creativeFlowRate)
    {
        $this->creativeFlowRate = $creativeFlowRate;
    }
}
