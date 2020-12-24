<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiUnitUpdateDataOperateStatusRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(List<Long>, "adIds")
     */
    private $adIds;

    /**
     * @JsonProperty(Integer, "dataOperateStatus")
     */
    private $dataOperateStatus;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'adIds', $this->adIds);
        $this->setUserParam($params, 'dataOperateStatus', $this->dataOperateStatus);
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
        return 'pdd.ad.api.unit.update.data.operate.status';
    }

    public function setAdIds($adIds)
    {
        $this->adIds = $adIds;
    }

    public function setDataOperateStatus($dataOperateStatus)
    {
        $this->dataOperateStatus = $dataOperateStatus;
    }
}
