<?php

namespace App\Domain\DataSource;

use App\Domain\Entity\BookEntity;

interface BookDataSource {

    /**
     * @param BookEntity $book
     *
     * @return mixed
     */
    public function put(BookEntity $book);
}
