<?php
namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddWaybillUpdateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(\DawnFrost\Pdd\Api\Request\PddWaybillUpdateRequest_ParamWaybillCloudPrintUpdateRequest, "param_waybill_cloud_print_update_request")
	*/
	private $paramWaybillCloudPrintUpdateRequest;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "param_waybill_cloud_print_update_request", $this->paramWaybillCloudPrintUpdateRequest);

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
		return "pdd.waybill.update";
	}

	public function setParamWaybillCloudPrintUpdateRequest($paramWaybillCloudPrintUpdateRequest)
	{
		$this->paramWaybillCloudPrintUpdateRequest = $paramWaybillCloudPrintUpdateRequest;
	}

}

class PddWaybillUpdateRequest_ParamWaybillCloudPrintUpdateRequest extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "object_id")
	*/
	private $objectId;

	/**
	* @JsonProperty(\DawnFrost\Pdd\Api\Request\PddWaybillUpdateRequest_ParamWaybillCloudPrintUpdateRequestPackageInfo, "package_info")
	*/
	private $packageInfo;

	/**
	* @JsonProperty(\DawnFrost\Pdd\Api\Request\PddWaybillUpdateRequest_ParamWaybillCloudPrintUpdateRequestRecipient, "recipient")
	*/
	private $recipient;

	/**
	* @JsonProperty(\DawnFrost\Pdd\Api\Request\PddWaybillUpdateRequest_ParamWaybillCloudPrintUpdateRequestSender, "sender")
	*/
	private $sender;

	/**
	* @JsonProperty(String, "template_url")
	*/
	private $templateUrl;

	/**
	* @JsonProperty(String, "waybill_code")
	*/
	private $waybillCode;

	/**
	* @JsonProperty(String, "wp_code")
	*/
	private $wpCode;

	public function setObjectId($objectId)
	{
		$this->objectId = $objectId;
	}

	public function setPackageInfo($packageInfo)
	{
		$this->packageInfo = $packageInfo;
	}

	public function setRecipient($recipient)
	{
		$this->recipient = $recipient;
	}

	public function setSender($sender)
	{
		$this->sender = $sender;
	}

	public function setTemplateUrl($templateUrl)
	{
		$this->templateUrl = $templateUrl;
	}

	public function setWaybillCode($waybillCode)
	{
		$this->waybillCode = $waybillCode;
	}

	public function setWpCode($wpCode)
	{
		$this->wpCode = $wpCode;
	}

}

class PddWaybillUpdateRequest_ParamWaybillCloudPrintUpdateRequestPackageInfo extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(List<\DawnFrost\Pdd\Api\Request\PddWaybillUpdateRequest_ParamWaybillCloudPrintUpdateRequestPackageInfoItemsItem>, "items")
	*/
	private $items;

	/**
	* @JsonProperty(Long, "volume")
	*/
	private $volume;

	/**
	* @JsonProperty(Long, "weight")
	*/
	private $weight;

	public function setItems($items)
	{
		$this->items = $items;
	}

	public function setVolume($volume)
	{
		$this->volume = $volume;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;
	}

}

class PddWaybillUpdateRequest_ParamWaybillCloudPrintUpdateRequestPackageInfoItemsItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Integer, "count")
	*/
	private $count;

	/**
	* @JsonProperty(String, "name")
	*/
	private $name;

	public function setCount($count)
	{
		$this->count = $count;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

}

class PddWaybillUpdateRequest_ParamWaybillCloudPrintUpdateRequestRecipient extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(\DawnFrost\Pdd\Api\Request\PddWaybillUpdateRequest_ParamWaybillCloudPrintUpdateRequestRecipientAddress, "address")
	*/
	private $address;

	/**
	* @JsonProperty(String, "mobile")
	*/
	private $mobile;

	/**
	* @JsonProperty(String, "name")
	*/
	private $name;

	/**
	* @JsonProperty(String, "phone")
	*/
	private $phone;

	public function setAddress($address)
	{
		$this->address = $address;
	}

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
	}

}

class PddWaybillUpdateRequest_ParamWaybillCloudPrintUpdateRequestRecipientAddress extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "city")
	*/
	private $city;

	/**
	* @JsonProperty(String, "detail")
	*/
	private $detail;

	/**
	* @JsonProperty(String, "district")
	*/
	private $district;

	/**
	* @JsonProperty(String, "province")
	*/
	private $province;

	/**
	* @JsonProperty(String, "town")
	*/
	private $town;

	/**
	* @JsonProperty(String, "country")
	*/
	private $country;

	public function setCity($city)
	{
		$this->city = $city;
	}

	public function setDetail($detail)
	{
		$this->detail = $detail;
	}

	public function setDistrict($district)
	{
		$this->district = $district;
	}

	public function setProvince($province)
	{
		$this->province = $province;
	}

	public function setTown($town)
	{
		$this->town = $town;
	}

	public function setCountry($country)
	{
		$this->country = $country;
	}

}

class PddWaybillUpdateRequest_ParamWaybillCloudPrintUpdateRequestSender extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "mobile")
	*/
	private $mobile;

	/**
	* @JsonProperty(String, "name")
	*/
	private $name;

	/**
	* @JsonProperty(String, "phone")
	*/
	private $phone;

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
	}

}
