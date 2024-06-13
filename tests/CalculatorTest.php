// tests/CalculatorTest.php
<?php

use PHPUnit\Framework\TestCase;

require_once 'src/Calculator.php';

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }
    public function testAddDecimalNumbers()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2.5, 3.7);
        $this->assertEquals(6.2, $result);
    }

}