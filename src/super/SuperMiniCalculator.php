<?php

class SuperMiniCalculator
{

    public function add($x, $y, $z): float|int
    {
        $a = floatval(0);
        return $x + $y + $z;
    }

    public function multiply($x, $y, $z): float|int
    {
        return $x * $y * $z;
    }
}