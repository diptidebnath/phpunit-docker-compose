<?php declare(strict_types=1);

final class Cart
{
    public static function calculateSum($cartitems) 
{
        return array_sum($cartitems);
    }
}