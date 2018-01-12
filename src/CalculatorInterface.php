<?php
/**
 * Author: Suraj Gusain
 * Date: 12-01-2018
 * Time: 11:54
 */

namespace src;


interface CalculatorInterface
{

    public function add($n1, $n2);
    public function subtract($n1, $n2);
    public function multiply($n1, $n2);
    public function divide($n1, $n2);
    public function vat($n1, $n2);

}