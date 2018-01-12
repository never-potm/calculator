<?php
/**
 * Author: Suraj Gusain
 * Date: 12-01-2018
 * Time: 13:45
 */

namespace src;


use src\client\AdditionClient;
use src\client\DivisionClient;
use src\client\MultiplicationClient;
use src\client\SubtractionClient;

class CalculatorFactory
{

    public static function build($type)
    {

        switch ($type) {
            case 'add':
                return new AdditionClient();
                break;
            case 'subtract':
                return new SubtractionClient();
                break;
            case 'multiply':
                return new MultiplicationClient();
                break;
            case 'divide':
                return new DivisionClient();
            default:
                return null;
                break;
        }
    }

}