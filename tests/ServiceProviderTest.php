<?php

namespace Ridrog\Boilerplate\Test;

use Illuminate\Support\ServiceProvider;
use Ridrog\Boilerplate\BoilerplateServiceProvider;
use Ridrog\Boilerplate\Test\TestCase as TestCase;

class ServiceProviderTest extends TestCase
{

    /**
     *
     * @var BoilerplateServiceProvider
     */
    private $provider;

    /**
     * Setup
     */
    public function setUp() : void
    {
        parent::setUp();

        $this->provider = $this->app->getProvider(BoilerplateServiceProvider::class);

    }

    /**
     * Tear Down
     */
    public function tearDown() : void
    {
        unset($this->provider);

        parent::tearDown();
    }

    /** @test */
    public function it_can_be_instantiated()
    {
        $expectations = [
             \Illuminate\Support\ServiceProvider::class,
             BoilerplateServiceProvider::class
        ];

        foreach ($expectations as $expected) {
            $this->assertInstanceOf($expected, $this->provider);
        }
    }

}