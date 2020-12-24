<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddAdApiAdvertiserQueryAccountInfoRequest extends PopBaseHttpRequest
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
        return 'pdd.ad.api.advertiser.query.account.info';
    }
}
