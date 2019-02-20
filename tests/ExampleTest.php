<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions; 
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    protected $app;

    public function setUp() 
    {
        parent::setUp();
        $this->app = $this->app;
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $app = $this->app();
        // $this->visit('/')
            //  ->see('Laravel 5');
    }
}
