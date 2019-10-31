<?php

namespace App\Data\Repository\Fake;

use App\Domain\DataSource\BookDataSource;
use App\Domain\Entity\BookEntity;

class FakeBookDataSource implements BookDataSource {

    public function put(BookEntity $book)
    {
        return $book;
    }
}