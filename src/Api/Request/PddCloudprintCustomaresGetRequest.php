<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;

class PddCloudprintCustomaresGetRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(String, "template_id")
     */
    private $templateId;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'template_id', $this->templateId);
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
        return 'pdd.cloudprint.customares.get';
    }

    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
    }
}
