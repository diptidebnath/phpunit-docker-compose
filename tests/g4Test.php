<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include "g5.php";

final class g4Test extends TestCase
{
   public function testCartTotalFiveHundreds() : void
   {
    
$cart =  [array(
    "name" => "Rubber duck", 
    "price" => 250,
    "amount" => 2
)];
    $result = CartwithProducts::calculateSum($cart);
      $this->assertEquals(500, $result);
   }

}