<?php namespace Jamalhassouni\LaravelSluggable\Tests\Models;

/**
 * Class PostWithCustomSource
 *
 * A test model that uses a custom suffix generation method.
 *
 * @package Jamalhassouni\LaravelSluggable\Tests\Models
 */
class PostWithCustomSource extends Post
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
                'source' => 'subtitle'
            ]
        ];
    }
}
