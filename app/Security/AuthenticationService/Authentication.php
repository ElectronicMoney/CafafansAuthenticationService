<?php

namespace App\AuthenticationService\Authentication;
use App\Services\CafafansHttpRestApi;

class Authentication
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
        $this->baseUri = config('services.security.authentication.base_uri');
        $this->httpRestApiClient = new CafafansHttpRestApi($this->baseUri);
    }

}
