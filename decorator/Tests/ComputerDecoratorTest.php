<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\Laptop;
use App\GPU;
use App\OLEDScreen;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new GPU(new Laptop());

        $this->assertSame(700, $laptop->getPrice());
        $this->assertSame("A laptop computer + GPU", $laptop->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new OLEDScreen(new Laptop());

        $this->assertSame(600, $laptop->getPrice());
        $this->assertSame("A laptop computer + OLED Screen", $laptop->getDescription());
    }
}