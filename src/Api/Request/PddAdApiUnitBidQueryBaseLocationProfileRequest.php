<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiUnitBidQueryBaseLocationProfileRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    protected function setUserParams(&$params)
    {
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
        return 'pdd.ad.api.unit.bid.query.base.location.profile';
    }
}
