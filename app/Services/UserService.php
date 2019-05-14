<?php

namespace App\Services;
use App\HttpRestApiClient\CafafansHttpRestApi;

class  UserService extends CafafansHttpRestApi
{
    /**
     * The baseUri to consume the authors service
     * @var string
     */
    public $baseUri;
    // public;

    /**
     * Creating a new User instance.
     *
     * @return void
     */
    public function __construct() {
        $this->baseUri = config('services.users.base_uri');
    }

    /**
     * Fetching the list of authors from the User Service
     * @param void
     * @return string
     */
    public function getUsers() {
        return $this->getServices('/users')->getBody();
    }

    /**
     * creating an author from authors micro service
     * @param array $data
     * @return string
     */
    public function createUser($data) {
        return $this->postService('/users', 'POST', $data)->getBody();
    }

    /**
     * Fetching an author instance from authors micro service
     * @param int $userId
     * @return string
     */
    public function getUser($userId) {
        return $this->getService('/users', $userId)->getBody();
    }

    /**
     * updating an author instance using authors micro service
     * @param array $data
     * @param int $userId
     * @return string
     */
    public function editUser($data, $userId) {
        return $this->putService('/users', $data, $userId)->getBody();
    }

    /**
     * Deleting an author instance from authors micro service
     * @param int $userId
     * @return string
     */
    public function deleteUser($userId) {
        return $this->deleteService('/users', $userId)->getBody();
    }
}
