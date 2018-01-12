<?php
/**
 * Author: Suraj Gusain
 * Date: 12-01-2018
 * Time: 13:21
 */

namespace src\client;


use src\CalculatorInterface;

class VatClient implements CalculatorInterface
{

    public function __construct()
    {
    }

    public function calculate($n1, $n2)
    {
        return $this->n1 - ($this->n2 * 0.15);
    }
}