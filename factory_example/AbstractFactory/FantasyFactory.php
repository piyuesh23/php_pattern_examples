<?php

namespace FactoryExample;

class FantasyFactory extends AbstractFactory {
    public function createBook(string $title): Book {
        return new FantasyBook($title);
    }
}
