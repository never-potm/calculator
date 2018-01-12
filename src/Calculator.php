<?php
/**
 * Author: Suraj Gusain
 * Date: 12-01-2018
 * Time: 11:43
 */

namespace src;


class Calculator implements CalculatorInterface
{

    public function __construct()
    {
    }

    /**
     * @param $n1 first-number
     * @param $n2 second-number
     * @return integer
     */
    public function add($n1, $n2)
    {
        return $n1 + $n2;
    }

    /**
     * @param $n1 first-number
     * @param $n2 second-number
     * @return integer
     */
    public function subtract($n1, $n2)
    {
        return $n1 - $n2;
    }

    /**
     * @param $n1 first-number
     * @param $n2 second-number
     * @return integer
     */
    public function multiply($n1, $n2)
    {
        return $n1 * $n2;
    }

    /**
     * @param $n1 first-number
     * @param $n2 second-number
     * @return integer
     */
    public function divide($n1, $n2)
    {
        return $n1 / $n2;
    }

    public function calculate($n1, $n2, $operation = 'add')
    {

        $result = 0;
        switch ($operation) {
            case 'add':
                $result = $this->add($n1, $n2);
                break;
            case 'subtract':
                $result = $this->subtract($n1, $n2);
                break;
            case 'multiply':
                $result = $this->multiply($n1, $n2);
                break;
            case 'divide':
                $result = $this->divide($n1, $n2);
                break;
            case 'vat':

                break;
            default:
                return 'This is an invalid operation';
                break;
        }
        return $result;
    }
}