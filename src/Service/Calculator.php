<?php
namespace App\Service;

class Calculator
{
    public function add(int $number1, int $number2): int
    {
        return $number1 + $number2;
    }
}