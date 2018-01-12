<?php
/**
 * Author: Suraj Gusain
 * Date: 12-01-2018
 * Time: 13:20
 */

namespace src\client;


use src\CalculatorInterface;

class DivisionClient implements CalculatorInterface
{

    /**
     * Division business logic
     * @param $n1
     * @param $n2
     * @return float|int
     */
    public function calculate($n1, $n2)
    {
        return $n1 / $n2;
    }
}