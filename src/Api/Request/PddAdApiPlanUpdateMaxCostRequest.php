<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiPlanUpdateMaxCostRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "maxCost")
     */
    private $maxCost;

    /**
     * @JsonProperty(Long, "planId")
     */
    private $planId;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'maxCost', $this->maxCost);
        $this->setUserParam($params, 'planId', $this->planId);
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
        return 'pdd.ad.api.plan.update.max.cost';
    }

    public function setMaxCost($maxCost)
    {
        $this->maxCost = $maxCost;
    }

    public function setPlanId($planId)
    {
        $this->planId = $planId;
    }
}
