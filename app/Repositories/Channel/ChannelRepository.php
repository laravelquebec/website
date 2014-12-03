<?php namespace LaravelQuebec\Repositories\Channel;

interface ChannelRepository {

    /**
     * @param  string  $slug
     * @param  array   $columns
     * @return \LaravelQuebec\Channel
     */
    public function findBySlug($slug, $columns = ['*']);

    /**
     * @param  array  $columns
     * @return \LaravelQuebec\Channel[]
     */
    public function getAll($columns = ['*']);

    /**
     * @param  string  $slug
     * @return \LaravelQuebec\Channel
     */
    public function bind($slug);

}
