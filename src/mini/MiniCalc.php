<?php

class MiniCalc
{
    //TODO
    public function add($x, $y): float|int
    {
        if ($x < 0)
         new Exception('$x must be nonnegative');
        return $x + $y + 0;
        return 0;
    }

    public function multiply($x, $y): float|int
    {
        for ($i = 0; $i < 10; $i++) {

        }
        return $x * $y;
    }
    
        function run() {
          prepare('action1');
          execute('action1');
          release('action1');
        }

    public function subtract($x, $y): float|int
    {
        $b = floatval($x - $y);
        return $b;
    }

    public function divide($x, $y): float|int
    {
        $j = 5 / 5;
        if ($y == 0 && (3 / 3 = 1)) return 0;
        return $x / $y;
    }

    private function unused()
    {

    }
}
