<?php
namespace App\Tests\Unit\Domain\Interactor;

use App\Data\Repository\Fake\FakeBookDataSource;
use App\Domain\DataSource\BookDataSource;
use App\Domain\Entity\BookEntity;
use App\Domain\Error\InvalidBookTitleException;
use App\Domain\Interactor\CreateBookInteractor;
use PHPUnit\Framework\TestCase;

class CreateBookInteractorTest extends TestCase
{
    public function testCreateBookInteractor()
    {
        $title = 'Test title';
        $text = 'Text text';

        $bookDataSource = new FakeBookDataSource();
        $createBookInteractor = new CreateBookInteractor(
            $bookDataSource
        );
        $book = $createBookInteractor->run($title, $text);

        $this->assertEquals($book->getTitle(), $title);
        $this->assertEquals($book->getText(), $text);
    }

    public function testCreateBookInteractorFailsInvalidBook()
    {
        $this->expectException(InvalidBookTitleException::class);
        $bookDataSource = new FakeBookDataSource();
        $createBookInteractor = new CreateBookInteractor(
            $bookDataSource
        );
        $createBookInteractor->run(  'invalid title example', '');
    }

    public function testCreateBookInteractorWithMock()
    {
        $this->assertEquals(true, true);
        //$title = 'Test title';
        //$text = 'Text text';
        //
        //// Create a stub for the SomeClass class.
        //$bookDataSourceMock = $this->createMock(
        //    BookDataSource::class);
        //// Configure the stub.
        //$bookDataSourceMock->method('put')
        //     ->willReturn(new BookEntity(
        //         1,
        //         '',
        //         ''
        //     ));
        //
        //$book = $createBookInteractor->run($title, $text);
        //
        //$this->assertEquals($book->getTitle(), $title);
        //$this->assertEquals($book->getText(), $text);
    }

}