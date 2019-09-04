<?php namespace Jamalhassouni\LaravelSluggable\Tests\Models;

/**
 * Class PostWithOnUpdate
 *
 * A test model that uses the onUpdate functionality.
 *
 * @package Jamalhassouni\LaravelSluggable\Tests\Models
 */
class PostWithOnUpdate extends Post
{

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }
}
