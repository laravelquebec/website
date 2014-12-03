<?php namespace LaravelQuebec\Repositories\User;

interface UserRepository {

    /**
     * @param  array  $userData
     * @return \LaravelQuebec\User
     */
    public function findByUsernameOrCreate($userData);

    /**
     * @param  string $username
     * @return \LaravelQuebec\User
     */
    public function bind($username);

    /**
     * @param  string  $username
     * @param  array   $columns
     * @return \LaravelQuebec\User
     */
    public function findByUsername($username, $columns = ['*']);

}
