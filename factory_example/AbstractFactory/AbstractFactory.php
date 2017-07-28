<?php

namespace FactoryExample;

abstract class AbstractFactory {
    abstract public function createBook(string $content): Book;
}
