<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddGoodsFilespaceImageUploadRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(\DawnFrost\Pdd\Api\Request\PddGoodsFilespaceImageUploadRequest_FILE, "file")
	*/
	private $file;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "file", $this->file);

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
		return "pdd.goods.filespace.image.upload";
	}

	public function setFile($file)
	{
		$this->file = $file;
	}

}
