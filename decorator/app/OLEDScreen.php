<?php

namespace App;

class OLEDScreen extends ComputerDecorator
{
    public function getPrice(): int
    {
        return $this->computer->getPrice() + 200;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . " + OLED Screen";
    }
}
