<?php
require path('app').'/Http/Controllers/BooksController.php';

class BooksControllerTest extends PHPUnit_Framework_TestCase
{
    private $controller;

    protected function setUp()
    {
        $this->controller = new BooksController();
    }

    protected function tearDown()
    {
        $this->controller = NULL;
    }

    public function testAdd()
    {

    }

}
