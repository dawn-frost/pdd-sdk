<?php

namespace DawnFrost\Pdd\Api\Request;

use DawnFrost\Pdd\PopBaseHttpRequest;
use DawnFrost\Pdd\PopBaseJsonEntity;

class PddAdApiUnitCreativeUpdateContentRequest extends PopBaseHttpRequest
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(\DawnFrost\Pdd\Api\Request\PddAdApiUnitCreativeUpdateContentRequest_AdCreativeUpdateMessage, "adCreativeUpdateMessage")
     */
    private $adCreativeUpdateMessage;

    /**
     * @JsonProperty(Long, "unitCreativeId")
     */
    private $unitCreativeId;

    protected function setUserParams(&$params)
    {
        $this->setUserParam($params, 'adCreativeUpdateMessage', $this->adCreativeUpdateMessage);
        $this->setUserParam($params, 'unitCreativeId', $this->unitCreativeId);
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
        return 'pdd.ad.api.unit.creative.update.content';
    }

    public function setAdCreativeUpdateMessage($adCreativeUpdateMessage)
    {
        $this->adCreativeUpdateMessage = $adCreativeUpdateMessage;
    }

    public function setUnitCreativeId($unitCreativeId)
    {
        $this->unitCreativeId = $unitCreativeId;
    }
}

class PddAdApiUnitCreativeUpdateContentRequest_AdCreativeUpdateMessage extends PopBaseJsonEntity
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(List<\DawnFrost\Pdd\Api\Request\PddAdApiUnitCreativeUpdateContentRequest_AdCreativeUpdateMessageAdImageVOListItem>, "adImageVOList")
     */
    private $adImageVOList;

    /**
     * @JsonProperty(List<\DawnFrost\Pdd\Api\Request\PddAdApiUnitCreativeUpdateContentRequest_AdCreativeUpdateMessageAdTextVOListItem>, "adTextVOList")
     */
    private $adTextVOList;

    /**
     * @JsonProperty(Long, "creativeSpecificationId")
     */
    private $creativeSpecificationId;

    public function setAdImageVOList($adImageVOList)
    {
        $this->adImageVOList = $adImageVOList;
    }

    public function setAdTextVOList($adTextVOList)
    {
        $this->adTextVOList = $adTextVOList;
    }

    public function setCreativeSpecificationId($creativeSpecificationId)
    {
        $this->creativeSpecificationId = $creativeSpecificationId;
    }
}

class PddAdApiUnitCreativeUpdateContentRequest_AdCreativeUpdateMessageAdImageVOListItem extends PopBaseJsonEntity
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(String, "imageUrl")
     */
    private $imageUrl;

    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }
}

class PddAdApiUnitCreativeUpdateContentRequest_AdCreativeUpdateMessageAdTextVOListItem extends PopBaseJsonEntity
{
    public function __construct()
    {
    }

    /**
     * @JsonProperty(String, "text")
     */
    private $text;

    public function setText($text)
    {
        $this->text = $text;
    }
}
