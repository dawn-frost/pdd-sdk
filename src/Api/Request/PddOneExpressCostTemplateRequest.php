<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddOneExpressCostTemplateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "cost_template_id")
	*/
	private $costTemplateId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "cost_template_id", $this->costTemplateId);

	}

	public function getVersion()
	{
		return "V1";
	}

	public function getDataType()
	{
		return "JSON";
	}

	public function getType()
	{
		return "pdd.one.express.cost.template";
	}

	public function setCostTemplateId($costTemplateId)
	{
		$this->costTemplateId = $costTemplateId;
	}

}
