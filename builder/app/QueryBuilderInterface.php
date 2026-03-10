<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;
interface QueryBuilderInterface{
    public function select(array $fields) : self;
    public function from(array $tables) :self;
    public function where(string $fields, string $operator, $value): self;
}