<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include "g3.php";

final class g3Test extends TestCase
{
   public function testCartTotalOneHundredEightyPointFive() : void
   {
    $cart = [100, 55, 20, 12.50];
       $result = Cart::calculateSum($cart);
      $this->assertEquals(187.5, $result);
   }

   public function testCartTotalTwoHundredTwentyFive() : void
   {
    $cart = [130, 57, 20, 18];
       $result = Cart::calculateSum($cart);
      $this->assertEquals(225, $result);
   }
  
  
}