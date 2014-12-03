<?php namespace LaravelQuebec\Presenters;

use Laracasts\Presenter\Presenter;
use League\Url\Url;

class UserPresenter extends Presenter {

    public function homepage()
    {
        $url = Url::createFromUrl($this->entity->homepage);

        return $url->getHost()->toUnicode();
    }

}
