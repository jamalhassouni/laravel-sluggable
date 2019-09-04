<?php namespace Jamalhassouni\LaravelSluggable\Tests\Models;

use Jamalhassouni\LaravelSluggable\SluggableScopeHelpers;

/**
 * Class PostShortConfigWithScopeHelpers
 *
 * @package Jamalhassouni\LaravelSluggable\Tests\Models
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
