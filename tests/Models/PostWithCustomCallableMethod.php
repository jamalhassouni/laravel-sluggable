<?php namespace EZhealthy\LaravelSluggable\Tests\Models;

use Illuminate\Support\Str;


/**
 * Class PostWithCustomCallableMethod
 *
 * @package EZhealthy\LaravelSluggable\Tests\Models
 */
class PostWithCustomCallableMethod extends Post
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
                'method' => [ static::class, 'makeSlug' ]
            ]
        ];
    }

    public static function makeSlug($string, $separator) {
        return strrev(Str::slug($string, $separator));
    }
}
