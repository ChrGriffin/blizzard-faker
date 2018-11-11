<?php

namespace ChrGriffin\BlizzardFaker\Tests;

use PHPUnit\Framework\TestCase as PHPUnit;
use Faker\{
    Factory,
    Generator
};
use ChrGriffin\BlizzardFaker\Traits\GeneratesPowersets;

abstract class TestCase extends PHPUnit
{
    /**
     * Class traits.
     */
    use GeneratesPowersets;

    /**
     * @var Generator
     */
    protected $faker;

    /**
     * Set up the test.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->faker = Factory::create();
    }
}