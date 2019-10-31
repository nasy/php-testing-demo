<?php

namespace App\Data\Repository\Fake;

use App\Domain\DataSource\BookDataSource;
use App\Domain\Entity\BookEntity;

class DoctrineBookDataSource implements BookDataSource {

    public function put(BookEntity $book)
    {
        // SQL QUERY WOULD GO HERE
        return $book;
    }
}