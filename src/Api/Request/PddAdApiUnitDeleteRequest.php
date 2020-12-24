<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiUnitDeleteRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "adId")
     */
    private $adId;

    /**
     * @JsonProperty(Integer, "scenesType")
     */
    private $scenesType;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'adId', $this->adId);
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
        return 'pdd.ad.api.unit.delete';
    }

    public function setAdId($adId)
    {
        $this->adId = $adId;
    }

    public function setScenesType($scenesType)
    {
        $this->scenesType = $scenesType;
    }
}
