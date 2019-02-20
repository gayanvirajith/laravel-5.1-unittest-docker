<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions; 

class ExampleTest extends TestCase
{
    protected $app;

    public function setUp() 
    {
        parent::setUp();
        $this->app = app();
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $app = $this->app;
        $this->assertNotEmpty($app);
        $this->visit('/')
             ->see('Laravel 5');
    }
}
