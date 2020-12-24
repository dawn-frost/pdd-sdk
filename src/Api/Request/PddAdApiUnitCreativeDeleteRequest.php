<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiUnitCreativeDeleteRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "unitCreativeId")
     */
    private $unitCreativeId;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'unitCreativeId', $this->unitCreativeId);
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
        return 'pdd.ad.api.unit.creative.delete';
    }

    public function setUnitCreativeId($unitCreativeId)
    {
        $this->unitCreativeId = $unitCreativeId;
    }
}
