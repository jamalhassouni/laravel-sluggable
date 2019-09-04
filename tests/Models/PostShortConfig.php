<?php namespace Jamalhassouni\LaravelSluggable\Tests\Models;

/**
 * Class PostShortConfig
 *
 * @package Jamalhassouni\LaravelSluggable\Tests\Models
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
