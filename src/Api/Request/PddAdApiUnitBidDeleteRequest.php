<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiUnitBidDeleteRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(Long, "adId")
     */
    private $adId;

    /**
     * @JsonProperty(List<Long>, "bidIds")
     */
    private $bidIds;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'adId', $this->adId);
        $this->setUserParam($params, 'bidIds', $this->bidIds);
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
        return 'pdd.ad.api.unit.bid.delete';
    }

    public function setAdId($adId)
    {
        $this->adId = $adId;
    }

    public function setBidIds($bidIds)
    {
        $this->bidIds = $bidIds;
    }
}
