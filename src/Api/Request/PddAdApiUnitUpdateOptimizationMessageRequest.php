<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddAdApiUnitUpdateOptimizationMessageRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "adId")
     */
    private $adId;

    /**
     * @JsonProperty(\DawnFrost\Pdd\Api\Request\PddAdApiUnitUpdateOptimizationMessageRequest_OptimizationMessage, "optimizationMessage")
     */
    private $optimizationMessage;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'adId', $this->adId);
        $this->setUserParam($params, 'optimizationMessage', $this->optimizationMessage);
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
        return 'pdd.ad.api.unit.update.optimization.message';
    }

    public function setAdId($adId)
    {
        $this->adId = $adId;
    }

    public function setOptimizationMessage($optimizationMessage)
    {
        $this->optimizationMessage = $optimizationMessage;
    }
}

class PddAdApiUnitUpdateOptimizationMessageRequest_OptimizationMessage extends PopBaseJsonEntity
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "accumulationBid")
     */
    private $accumulationBid;

    /**
     * @JsonProperty(Long, "optimizationBid")
     */
    private $optimizationBid;

    /**
     * @JsonProperty(Integer, "optimizationGoal")
     */
    private $optimizationGoal;

    /**
     * @JsonProperty(Integer, "optimizationMethod")
     */
    private $optimizationMethod;

    public function setAccumulationBid($accumulationBid)
    {
        $this->accumulationBid = $accumulationBid;
    }

    public function setOptimizationBid($optimizationBid)
    {
        $this->optimizationBid = $optimizationBid;
    }

    public function setOptimizationGoal($optimizationGoal)
    {
        $this->optimizationGoal = $optimizationGoal;
    }

    public function setOptimizationMethod($optimizationMethod)
    {
        $this->optimizationMethod = $optimizationMethod;
    }
}
