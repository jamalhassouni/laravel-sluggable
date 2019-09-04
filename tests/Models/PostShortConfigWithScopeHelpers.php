<?php namespace EZhealthy\LaravelSluggable\Tests\Models;

use EZhealthy\LaravelSluggable\SluggableScopeHelpers;

/**
 * Class PostShortConfigWithScopeHelpers
 *
 * @package EZhealthy\LaravelSluggable\Tests\Models
 */
class PostShortConfigWithScopeHelpers extends Post
{

    use SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug_field'
        ];
    }
}
