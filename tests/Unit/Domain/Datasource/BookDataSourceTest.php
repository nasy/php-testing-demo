<?php
namespace App\Tests\Unit\Domain\Entity;

use App\Data\Repository\Fake\FakeBookDataSource;
use App\Domain\DataSource\BookDataSource;
use App\Domain\Entity\BookEntity;
use PHPUnit\Framework\TestCase;

class BookDataSourceTest extends TestCase
{
    public function testBookDataSource()
    {
        $bookDataSource = new FakeBookDataSource();
        $this->assertTrue($bookDataSource instanceof BookDataSource);

        $book = new BookEntity(
            1,
            'Test title',
            'Text text'
        );
        $bookSaved = $bookDataSource->put($book);

        $this->assertSame($book, $bookSaved);
    }
}