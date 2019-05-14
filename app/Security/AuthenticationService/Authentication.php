<?php

namespace App\Security\AuthenticationService\Authentication;
use App\HttpRestApiClient\CafafansHttpRestApi;

class Authentication extends CafafansHttpRestApi
{

    /**
     * The baseUri to consume the authors service
     * @var string
     */
    public $baseUri;

    /**
     * Creating a new User instance.
     *
     * @return void
     */
    public function __construct() {
        $this->baseUri = config('services.security.authentication.base_uri');
    }

}
