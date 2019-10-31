<?php
namespace App\Tests\Unit\Domain\Entity;

use App\Domain\Entity\BookEntity;
use PHPUnit\Framework\TestCase;

class BookEntityTest extends TestCase
{
    public function testBookEntity()
    {
        $id = 1;
        $title = 'Test title';
        $text = 'Text text';

        $book = new BookEntity(
            $id,
            $title,
            $text
        );

        $this->assertEquals($book->getId(), $id);
        $this->assertEquals($book->getTitle(), $title);
        $this->assertEquals($book->getText(), $text);

        $editTitle = 'Test title 2';
        $book->setTitle($editTitle);
        $this->assertEquals($book->getTitle(), $editTitle);

        $editText = 'Text text 2';
        $book->setText($editText);
        $this->assertEquals($book->getText(), $editText);

        // Could also add negative ones
        $this->assertNotEquals($book->getText(), $book->getTitle());

    }
}