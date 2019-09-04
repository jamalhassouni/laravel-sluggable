<?php namespace Jamalhassouni\LaravelSluggable\Tests\Models;

use Cocur\Slugify\Slugify;

/**
 * Class PostWithForeignRuleset
 *
 * A test model that customizes the Slugify engine with a foreign ruleset.
 *
 * @package Jamalhassouni\LaravelSluggable\Tests\Models
 */
class PostWithForeignRuleset extends Post
{

    /**
     * @param \Cocur\Slugify\Slugify $engine
     * @param string $attribute
     * @return \Cocur\Slugify\Slugify
     */
    public function customizeSlugEngine(Slugify $engine, $attribute)
    {
        $engine->activateRuleSet('esperanto');

        return $engine;
    }
}
