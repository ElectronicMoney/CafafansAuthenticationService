<?php

namespace App\Security\AuthorizationService\Authorization;
use App\HttpRestApiClient\CafafansHttpRestApi;

class Authorization extends CafafansHttpRestApi
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
        $this->baseUri = config('services.security.authorization.base_uri');
    }
}
