<?php namespace LaravelQuebec\Services\Auth;

use Illuminate\Contracts\Auth\Guard;
use Laravel\Socialite\Contracts\Factory as Socialite;
use LaravelQuebec\Repositories\User\UserRepository;

abstract class AuthenticateUser {

    /**
     * @var UserRepository
     */
    protected $users;

    /**
     * @var Socialite
     */
    protected $socialite;

    /**
     * @var Guard
     */
    protected $auth;

    /**
     * @param UserRepository $users
     * @param Socialite $socialite
     * @param Guard $auth
     */
    public function __construct(UserRepository $users, Socialite $socialite, Guard $auth)
    {
        $this->users = $users;
        $this->socialite = $socialite;
        $this->auth = $auth;
    }

    /**
     * @param  bool $hasCode
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    abstract public function execute($hasCode);

}
