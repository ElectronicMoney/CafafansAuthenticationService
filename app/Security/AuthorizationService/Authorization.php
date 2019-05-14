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
    public $httpRestApi;

    /**
     * Creating a new User instance.
     *
     * @return void
     */
    public function __construct() {
        $this->baseUri = config('security.authorization.base_uri');
        $this->httpRestApi = new CafafansHttpRestApi();
    }
}
