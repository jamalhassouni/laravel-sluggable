<?php namespace EZhealthy\LaravelSluggable\Tests\Models;

/**
 * Class PostWithIncludeTrashed
 *
 * A test model that uses the Sluggable package and "includeTrashed",
 * but does not use Laravel's SoftDeleting trait.
 *
 * @package EZhealthy\LaravelSluggable\Tests\Models
 */
class PostWithIncludeTrashed extends Post
{

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'includeTrashed' => true
            ]
        ];
    }
}
