<?php declare(strict_types=1);

final class CartwithProducts
{
    
    public static function calculateSum($cartitems) 
{
    $total = 0;
  
       if($cartitems){
            foreach($cartitems as $cartitem){
                $productObject = json_decode(json_encode((object) $cartitem), FALSE);
                $total =  $productObject->price * $productObject->amount; 
            }        
       }
       return $total;
    }
}