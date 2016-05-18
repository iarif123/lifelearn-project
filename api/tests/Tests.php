<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class Tests extends TestCase
{


    public function testNewBook()
    {
        $this->call('POST','books/create');

        $this->assertRedirectedTo('books');
    }
}