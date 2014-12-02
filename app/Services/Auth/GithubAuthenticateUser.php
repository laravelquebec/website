<?php namespace LaravelQuebec\Services\Auth;

class GithubAuthenticateUser extends AuthenticateUser {

    /**
     * @param  bool $hasCode
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function execute($hasCode)
    {
        if ( ! $hasCode) return $this->getAuthorization();

        $user = $this->users->findByUsernameOrCreate($this->getGithubUser());

        $this->auth->login($user, true);

        return redirect()->intended('/');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    protected function getAuthorization()
    {
        return $this->socialite->driver('github')->redirect();
    }

    /**
     * @return \Laravel\Socialite\Contracts\User
     */
    protected function getGithubUser()
    {
        return $this->socialite->driver('github')->user();
    }

}
