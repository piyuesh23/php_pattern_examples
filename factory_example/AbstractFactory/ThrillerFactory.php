<?php

namespace FactoryExample;

class ThrillerFactory extends AbstractFactory {
    public function createBook(string $title): Book {
        return new ThrillerBook($title);
    }
}
