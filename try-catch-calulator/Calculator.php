<?php


class Calculation
{
    public function sum($x, $y)
    {
        return $y + $x;
    }

    public function sub($x, $y)
    {
        return $x - $y;
    }

    public function div($x, $y)
    {
        if ($y == 0) {
            throw new Exception('so nhap vao khong hop le');
        }
        return $x / $y;
    }

    public function mult($x, $y)
    {
        return $x * $y;
    }
}