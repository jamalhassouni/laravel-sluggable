<?php namespace EZhealthy\LaravelSluggable\Tests\Models;

/**
 * Class PostWithEmptySeparator
 *
 * A test model that uses an empty separator.
 *
 * @package EZhealthy\LaravelSluggable\Tests\Models
 */
class PostWithEmptySeparator extends Post
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
                'separator' => '',
            ]
        ];
    }
}
