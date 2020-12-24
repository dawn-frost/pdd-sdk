<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddDdkGoodsZsUnitUrlGenRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(String, "pid")
     */
    private $pid;

    /**
     * @JsonProperty(String, "source_url")
     */
    private $sourceUrl;

    /**
     * @JsonProperty(String, "custom_parameters")
     */
    private $customParameters;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'pid', $this->pid);
        $this->setUserParam($params, 'source_url', $this->sourceUrl);
        $this->setUserParam($params, 'custom_parameters', $this->customParameters);
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
        return 'pdd.ddk.goods.zs.unit.url.gen';
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    public function setSourceUrl($sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;
    }

    public function setCustomParameters($customParameters)
    {
        $this->customParameters = $customParameters;
    }
}
