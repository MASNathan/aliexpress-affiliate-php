<?php

namespace MASNathan\AliExpress;

use MASNathan\APICaller\Client as BaseClient;

class Client extends BaseClient
{

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    protected $digitalSignature;

    /**
     * @var string
     */
    protected $trackingId;

    /**
     * Client constructor.
     *
     * @param string $apiKey
     * @param string $digitalSignature
     * @param string $trackingId
     */
    public function __construct($apiKey, $digitalSignature = null, $trackingId = null)
    {
        $this->apiKey = $apiKey;
        $this->setDigitalSignature($digitalSignature);
        $this->setTrackingId($trackingId);
    }

    /**
     * Sets the Digital Signature
     *
     * @param string $digitalSignature
     * @return Client
     */
    public function setDigitalSignature($digitalSignature)
    {
        $this->digitalSignature = $digitalSignature;

        return $this;
    }

    /**
     * @return string
     */
    public function getDigitalSignature()
    {
        return $this->digitalSignature;
    }

    /**
     * Sets the tracking ID
     *
     * @param string $trackingId
     * @return Client
     */
    public function setTrackingId($trackingId)
    {
        $this->trackingId = $trackingId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingId()
    {
        return $this->trackingId;
    }

    /**
     * Returns the API Endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return 'http://gw.api.alibaba.com/openapi/param2/2/portals.open/';
    }

    /**
     * Returns the formated URL to the requested section
     *
     * @param string $section   API Section
     * @param array  $uriParams Params
     *
     * @return string
     */
    protected function getUrl($section, array $uriParams = [])
    {
        return parent::getUrl(sprintf("api.%s/%s", $section, $this->apiKey), $uriParams);
    }
}
