<?php namespace LaravelQuebec\Repositories\User;

use LaravelQuebec\User;

class DbUserRepository implements UserRepository {

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
        ]);
    }

}
