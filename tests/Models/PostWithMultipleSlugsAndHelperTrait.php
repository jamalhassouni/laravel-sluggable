<?php namespace EZhealthy\LaravelSluggable\Tests\Models;

use EZhealthy\LaravelSluggable\SluggableScopeHelpers;

/**
 * Class PostWithMultipleSlugsAndPrimary
 *
 * @package EZhealthy\LaravelSluggable\Tests\Models
 */
class PostWithMultipleSlugsAndHelperTrait extends PostWithMultipleSlugs
{

    use SluggableScopeHelpers;

}
