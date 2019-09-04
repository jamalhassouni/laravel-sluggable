<?php namespace Jamalhassouni\LaravelSluggable\Tests\Models;

/**
 * Class PostWithMultipleSlugs
 *
 * @package Jamalhassouni\LaravelSluggable\Tests\Models
 */
class PostWithMultipleSlugs extends Post
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
            ],
            'dummy' => [
                'source' => 'subtitle',
                'separator' => '.',
            ],
        ];
    }
}
