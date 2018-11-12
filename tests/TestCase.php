<?php

namespace ChrGriffin\BlizzardFaker\Tests;

use PHPUnit\Framework\TestCase as PHPUnit;
use Faker\{
    Factory,
    Generator
};

abstract class TestCase extends PHPUnit
{
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