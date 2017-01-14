<?php

namespace Xolf\LocationIQ;

class Geocoding {

    /**
     * @var ApiHandler
     */
    protected $apiHandler;

    public function __construct(ApiHandler $apiHandler)
    {
        $this->setApiHandler($apiHandler);
    }

    public function request() {

    }

    protected function parseResult() {

    }

    public function setApiHandler(ApiHandler $apiHandler) {
        $this->apiHandler = $apiHandler;
    }

    /**
     * @return ApiHandler
     */
    public function getApiHandler()
    {
        return $this->apiHandler;
    }
}
