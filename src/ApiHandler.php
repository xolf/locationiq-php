<?php

namespace Xolf\LocationIQ;

class ApiHandler {

    const FORMAT = 'json';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $endpoint = 'http://locationiq.org/v1/';

    /**
     * @var GuzzleHttp\Client
     */
    private $guzzle;

    public function __construct($apiKey)
    {
        $this->setApiKey($apiKey);
    }

    /**
     * @param $apiKey
     * @return ApiHandler
     */
    public static function create($apiKey) {
        $handler = new ApiHandler($apiKey);
        return $handler;
    }

    /**
     * Build the url for the api request
     * @param array $params
     * @return string
     * @throws Exception
     */
    public function buildUrl($params)
    {
        // https://locationiq.org/#docs
        if(!isset($params['method'])) {
            throw new Exception("A method must be specified e.g. search/reverse/balance");
        }

        $params['key'] = $this->getApiKey();
        $params['format'] = self::FORMAT;

        $method = $params['method'];
        unset($params['method']);

        $query = http_build_query($params);
        return 'http://locationiq.org/v1/'.$method.'.php?'.$query;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param string $ebdpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->ebdpoint = $endpoint;
    }

    /**
     * @return GuzzleHttp\Client
     */
    public function getGuzzle()
    {
        if(is_null($this->guzzle)) {
            $this->guzzle = new GuzzleHttp\Client();
        }
        return $this->guzzle;
    }

    /**
     * @param GuzzleHttp\Client $guzzle
     */
    public function setGuzzle(GuzzleHttp\Client $guzzle)
    {
        $this->guzzle = $guzzle;
    }

}
