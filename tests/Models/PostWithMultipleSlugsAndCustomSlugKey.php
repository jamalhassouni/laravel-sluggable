<?php namespace EZhealthy\LaravelSluggable\Tests\Models;

/**
 * Class PostWithMultipleSlugsAndCustomSlugKey
 *
 * @package EZhealthy\LaravelSluggable\Tests\Models
 */
class PostWithMultipleSlugsAndCustomSlugKey extends PostWithMultipleSlugsAndHelperTrait
{

    protected $slugKeyName = 'dummy';
    
}
