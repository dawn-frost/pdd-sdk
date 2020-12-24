<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiPlanQueryCanCreateAdPlanRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(String, "planName")
     */
    private $planName;

    /**
     * @JsonProperty(Integer, "scenesType")
     */
    private $scenesType;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'planName', $this->planName);
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
        return 'pdd.ad.api.plan.query.can.create.ad.plan';
    }

    public function setPlanName($planName)
    {
        $this->planName = $planName;
    }

    public function setScenesType($scenesType)
    {
        $this->scenesType = $scenesType;
    }
}
