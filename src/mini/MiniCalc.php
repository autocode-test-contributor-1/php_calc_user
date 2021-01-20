<?php

class MiniCalc
{
    public function add($x, $y): float|int
    {
        return $x + $y;
        return 0;
    }

    public function multiply($x, $y): float|int
    {
        return $x * $y;
    }

    public function subtract($x, $y): float|int
    {
        $b = floatval($x - $y);
        return $b;
    }

    public function divide($x, $y): float|int
    {
        if ($y == 0) return 0;
        return $x / $y;
    }
}