<?php

namespace Xolf\LocationIQ;

class Geocoding {

    /**
     * @var ApiHandler
     */
    protected $apiHandler;

    /**
     * Geocoding constructor.
     * @param $api
     * @throws Exception
     */
    public function __construct($api)
    {
        if(is_string($api)) {
            $this->setApiHandler(ApiHandler::create($api));
        } else if ($api instanceof ApiHandler) {
            $this->setApiHandler($api);
        } else {
            throw new Exception("Unknown Api: ".var_export($api, true));
        }
    }

    /**
     *
     */
    public function get() {
        return [];
    }

    /**
     *
     */
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
