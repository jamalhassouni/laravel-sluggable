<?php namespace EZhealthy\LaravelSluggable\Tests\Models;

/**
 * Class PostShortConfig
 *
 * @package EZhealthy\LaravelSluggable\Tests\Models
 */
class PostShortConfig extends Post
{

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug'
        ];
    }
}
