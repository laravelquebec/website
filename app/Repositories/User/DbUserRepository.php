<?php namespace LaravelQuebec\Repositories\User;

use LaravelQuebec\User;

class DbUserRepository implements UserRepository {

    /**
     * @param  string  $username
     * @param  array   $columns
     * @return User
     */
    public function findByUsername($username, $columns = ['*'])
    {
        return User::query()->where('username', '=', $username)->get($columns)->first();
    }

    /**
     * @param  \stdClass  $userData
     * @return \LaravelQuebec\User
     */
    public function findByUsernameOrCreate($userData)
    {
        return User::firstOrCreate([
            'username' => $userData->nickname,
            'name' => $userData->name,
            'email' => $userData->email,
            'avatar' => $userData->avatar,
            'location' => $userData->user['location'],
            'hireable' => $userData->user['hireable'],
            'description' => $userData->user['bio'],
            'homepage' => $userData->user['blog'],
            'company' => $userData->user['company'],
        ]);
    }

    /**
     * @param  string  $username
     * @return User
     */
    public function bind($username)
    {
        return $this->findByUsername($username);
    }

}
