<?php namespace LaravelQuebec\Repositories\User;

interface UserRepository {

    /**
     * @param  array $userData
     * @return \LaravelQuebec\User
     */
    public function findByUsernameOrCreate($userData);

}
