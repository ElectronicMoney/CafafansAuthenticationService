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
    public $httpRestApi;

    /**
     * Creating a new User instance.
     *
     * @return void
     */
    public function __construct() {
        $this->baseUri = config('security.authentication.base_uri');
        $this->httpRestApi = new CafafansHttpRestApi();
    }

}
