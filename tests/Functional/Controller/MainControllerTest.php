<?php
namespace App\Tests\Functional\Controller;

use PHPUnit\Framework\TestCase;

class MainControllerTest extends TestCase
{
    public function testGetBooks()
    {
        // Here we would to a typical get request to books
        // and check response is ok
        $this->assertSame(true, true);
    }

    public function testGetBooksWillFailNoAccess()
    {
        // Here we would to a typical get request to books
        // and check response is ok
        $this->assertSame(true, true);
    }
}