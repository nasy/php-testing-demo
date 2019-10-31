<?php

namespace App\Domain\Entity;

class BookEntity {

    /** @var integer */
    private $id;
    /** @var string */
    private $title;
    /** @var string */
    private $text;

    /**
     * BookEntity constructor.
     *
     * @param int    $id
     * @param string $title
     * @param string $text
     */
    public function __construct(int $id, string $title, string $text)
    {
        $this->id    = $id;
        $this->title = $title;
        $this->text  = $text;
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }


    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }
}
