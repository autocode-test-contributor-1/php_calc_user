<?php

class MiniCalc
{
    public function add($x, $y): float|int
    {
        return $x + $y + 10;
    }

    public function multiply($x, $y): float|int
    {
        return $x * $y;
    }

    public function subtract($x, $y): float|int
    {
        return $x - $y * 2;
    }

    public function divide($x, $y): float|int
    {
        if ($y == 0) return 0;
        return $x / $y;
    }
}