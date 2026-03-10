<?php

namespace App;

class GPU extends ComputerDecorator
{
    public function getPrice(): int
    {
        return $this->computer->getPrice() + 300;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . " + GPU";
    }
}
