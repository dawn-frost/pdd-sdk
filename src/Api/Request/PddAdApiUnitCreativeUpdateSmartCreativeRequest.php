<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiUnitCreativeUpdateSmartCreativeRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(String, "text")
     */
    private $text;

    /**
     * @JsonProperty(Long, "unitCreativeId")
     */
    private $unitCreativeId;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'text', $this->text);
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
        return 'pdd.ad.api.unit.creative.update.smart.creative';
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function setUnitCreativeId($unitCreativeId)
    {
        $this->unitCreativeId = $unitCreativeId;
    }
}
