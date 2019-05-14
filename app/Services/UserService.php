<?php

namespace App\Services;
use App\HttpRestApiClient\CafafansHttpRestApi;

class  UserService
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
        $this->baseUri = config('services.users.base_uri');
        $this->httpRestApiClient = new CafafansHttpRestApi();
    }

    /**
     * Fetching the list of authors from the User Service
     * @param void
     * @return string
     */
    public function getUsers() {
        return $this->httpRestApiClient->getServices('/users');
    }

    /**
     * creating an author from authors micro service
     * @param array $data
     * @return string
     */
    public function createUser($data) {
        return $this->httpRestApiClient->postService('/users', 'POST', $data);
    }

    /**
     * Fetching an author instance from authors micro service
     * @param int $userId
     * @return string
     */
    public function getUser($userId) {
        return $this->httpRestApiClient->getService('/users', $userId);
    }

    /**
     * updating an author instance using authors micro service
     * @param array $data
     * @param int $userId
     * @return string
     */
    public function editUser($data, $userId) {
        return $this->httpRestApiClient->putService('/users', $data, $userId);
    }

    /**
     * Deleting an author instance from authors micro service
     * @param int $userId
     * @return string
     */
    public function deleteUser($userId) {
        return $this->httpRestApiClient->deleteService('/users', $userId);
    }
}
