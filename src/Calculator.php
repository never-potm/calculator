<?php
/**
 * Author: Suraj Gusain
 * Date: 12-01-2018
 * Time: 11:43
 */

namespace src;


class Calculator
{
    public function calculate($n1, $n2, $operation = 'add')
    {

        $factory = CalculatorFactory::build($operation);

        if (!empty($factory)) {
            return $factory->calculate($n1, $n2);
        }
        return 'Invalid Operation';
    }
}