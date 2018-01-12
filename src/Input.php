<?php
/**
 * Author: Suraj Gusain
 * Date: 12-01-2018
 * Time: 13:25
 */

namespace src;


class Input
{

    protected $n1, $n2;

    /**
     * @return integer
     */
    public function getN1()
    {
        return $this->n1;
    }

    /**
     * @return integer
     */
    public function getN2()
    {
        return $this->n2;
    }

    /**
     * @param integer $n1
     */
    public function setN1($n1)
    {
        $this->n1 = $n1;
    }

    /**
     * @param integer $n2
     */
    public function setN2($n2)
    {
        $this->n2 = $n2;
    }
}