<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiUnitUpdateUnitNameRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "adId")
     */
    private $adId;

    /**
     * @JsonProperty(String, "adName")
     */
    private $adName;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'adId', $this->adId);
        $this->setUserParam($params, 'adName', $this->adName);
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
        return 'pdd.ad.api.unit.update.unit.name';
    }

    public function setAdId($adId)
    {
        $this->adId = $adId;
    }

    public function setAdName($adName)
    {
        $this->adName = $adName;
    }
}
