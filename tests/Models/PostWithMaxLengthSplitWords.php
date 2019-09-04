<?php namespace EZhealthy\LaravelSluggable\Tests\Models;

/**
 * Class PostWithMaxLength
 *
 * @package EZhealthy\LaravelSluggable\Tests\Models
 */
class PostWithMaxLengthSplitWords extends Post
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
                'maxLength' => 10,
                'maxLengthKeepWords' => false,
            ],
        ];
    }
}
