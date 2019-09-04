<?php namespace Jamalhassouni\LaravelSluggable\Tests\Models;

use Jamalhassouni\LaravelSluggable\SluggableScopeHelpers;

/**
 * Class PostWithMultipleSlugsAndPrimary
 *
 * @package Jamalhassouni\LaravelSluggable\Tests\Models
 */
class PostWithMultipleSlugsAndHelperTrait extends PostWithMultipleSlugs
{

    use SluggableScopeHelpers;

}
