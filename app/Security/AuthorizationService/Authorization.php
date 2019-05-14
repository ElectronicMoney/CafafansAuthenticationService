<?php

namespace App\AuthorizationService\Authorization;
use App\Services\CafafansHttpRestApi;

class Authorization
{

    /**
     * The baseUri to consume the authors service
     * @var string
     */
    public $baseUri;
    public $httpRestApiClient;

    /**
     * Creating a new User instance.
     *
     * @return void
     */
    public function __construct() {
        $this->baseUri = config('services.security.authorization.base_uri');
        $this->httpRestApiClient = new CafafansHttpRestApi($this->baseUri);
    }
}
