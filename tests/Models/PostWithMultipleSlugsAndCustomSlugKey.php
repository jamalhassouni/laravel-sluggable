<?php namespace Jamalhassouni\LaravelSluggable\Tests\Models;

/**
 * Class PostWithMultipleSlugsAndCustomSlugKey
 *
 * @package Jamalhassouni\LaravelSluggable\Tests\Models
 */
class PostWithMultipleSlugsAndCustomSlugKey extends PostWithMultipleSlugsAndHelperTrait
{

    protected $slugKeyName = 'dummy';
    
}
