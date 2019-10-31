<?php
namespace App\Tests\Unit\Domain\Entity;

use App\Domain\Error\InvalidBookTitleException;
use PHPUnit\Framework\TestCase;

class InvalidBookExceptionTest extends TestCase
{
    public function testBookInvalidException()
    {
        $this->expectException(InvalidBookTitleException::class);
        throw new InvalidBookTitleException('Invalid Book');
    }
}