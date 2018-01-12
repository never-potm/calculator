<?php
/**
 * Author: Suraj Gusain
 * Date: 12-01-2018
 * Time: 11:27
 */

use src\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{

    private $calc;

    public function setUp()
    {
        $this->calc = new Calculator();
    }

    public function tearDown()
    {
        $this->calc = null;
    }

    public function testAddChecksOut()
    {
        $res = $this->calc->calculate(1,2,'add');
        $this->assertEquals(3, $res, 'Result of `add` checks out');
    }

    public function testSubtractionChecksOut()
    {
        $res = $this->calc->calculate(2,2,'subtract');
        $this->assertEquals(0, $res, 'Result of `subract` checks out');
    }

    public function testMultiplicationChecksOut()
    {
        $res = $this->calc->calculate(1,2,'multiply');
        $this->assertEquals(2, $res, 'Result of `multiply` checks out');
    }

    public function testDivideChecksOut()
    {
        $res = $this->calc->calculate(1,1,'divide');
        $this->assertEquals(1, $res, 'Result of `division` checks out');
    }
}