<?php namespace LaravelQuebec\Repositories\Channel;

use LaravelQuebec\Channel;

class DbChannelRepository implements ChannelRepository {

    /**
     * @param  string $slug
     * @param  array $columns
     * @return Channel[]
     */
    public function findBySlug($slug, $columns = ['*'])
    {
        return Channel::query()->where('slug', '=', $slug)->get($columns)->first();
    }

    /**
     * @param  array $columns
     * @return Channel[]
     */
    public function getAll($columns = ['*'])
    {
        return Channel::query()->orderBy('position')->get($columns);
    }

    /**
     * @param  string $slug
     * @return Channel
     */
    public function bind($slug)
    {
        return self::findBySlug($slug);
    }

}
