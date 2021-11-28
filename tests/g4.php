<?php declare(strict_types=1);

final class CartwithProducts
{
    public static function calculateSum($cartitems) 
{
    $total = 0;
  
       if($cartitems){
           foreach($cartitems as $cartitem){
            $total =   $cartitem["price"] * $cartitem['amount']; 
           }   
       }
       return $total;
    }
}