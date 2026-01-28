<?php

namespace App;

class Example
{
    /**
     * @param  int[]  $numbers
     */
    public function sum(array $numbers): int
    {
        $total = 0;
        foreach ($numbers as $n) {
            $total += $n;
        }

        return $total;
    }
}
