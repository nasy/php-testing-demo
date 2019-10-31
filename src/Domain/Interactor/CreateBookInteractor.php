<?php

namespace App\Domain\Interactor;

use App\Domain\DataSource\BookDataSource;
use App\Domain\Entity\BookEntity;
use App\Domain\Error\InvalidBookTitleException;

class CreateBookInteractor {

    /** @var BookDataSource */
    private $bookDataSource;

    /**
     * CreateBookInteractor constructor.
     *
     * @param $bookDataSource
     */
    public function __construct(BookDataSource $bookDataSource)
    {
        $this->bookDataSource = $bookDataSource;
    }


    /**
     * @param string $title
     * @param string $text
     *
     * @return BookEntity
     * @throws InvalidBookTitleException
     */
    public function run(string $title, string $text) : BookEntity
    {
        if($title == 'invalid title example') {
            throw new InvalidBookTitleException();
        }
        $book = new BookEntity(
            1,
            $title,
            $text
        );
        $this->bookDataSource->put($book);
        return $book;
    }
}
