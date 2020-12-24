<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddCloudWebsessionSendRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(String, "cache_type")
     */
    private $cacheType;

    /**
     * @JsonProperty(List<\DawnFrost\Pdd\Api\Request\PddCloudWebsessionSendRequest_SessionInfoListItem>, "session_info_list")
     */
    private $sessionInfoList;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'cache_type', $this->cacheType);
        $this->setUserParam($params, 'session_info_list', $this->sessionInfoList);
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
        return 'pdd.cloud.websession.send';
    }

    public function setCacheType($cacheType)
    {
        $this->cacheType = $cacheType;
    }

    public function setSessionInfoList($sessionInfoList)
    {
        $this->sessionInfoList = $sessionInfoList;
    }
}

class PddCloudWebsessionSendRequest_SessionInfoListItem extends PopBaseJsonEntity
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(String, "key")
     */
    private $key;

    /**
     * @JsonProperty(String, "value")
     */
    private $value;

    /**
     * @JsonProperty(Long, "expir_time")
     */
    private $expirTime;

    /**
     * @JsonProperty(String, "function")
     */
    private $function;

    public function setKey($key)
    {
        $this->key = $key;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function setExpirTime($expirTime)
    {
        $this->expirTime = $expirTime;
    }

    public function setFunction($function)
    {
        $this->function = $function;
    }
}
