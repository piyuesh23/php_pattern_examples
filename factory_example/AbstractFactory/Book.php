<?php

namespace FactoryExample;

abstract class Book
{
    /**
     * @var string
     */
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
