<?php
/**
 * Author: Suraj Gusain
 * Date: 12-01-2018
 * Time: 13:20
 */

namespace src\client;


use src\CalculatorInterface;

class SubtractionClient implements CalculatorInterface
{

    public function __construct()
    {
    }


    public function calculate($n1, $n2)
    {
        return $n1 - $n2;
    }
}