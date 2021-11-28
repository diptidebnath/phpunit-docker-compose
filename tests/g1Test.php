<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include "g1.php";

final class g1Test extends TestCase
{
   public function test5DagarKvar() : void
   {
       $result = Delivery::getDaysToDelivery(5);
      $this->assertStringStartsWith("5", $result);
   }
   public function test1DagarKvar() : void
   {
       $result = Delivery::getDaysToDelivery(1);
      $this->assertStringStartsWith("1", $result);
   }
   public function testKommerIdag() : void
   {
       $result = Delivery::getDaysToDelivery(0);
      $this->assertStringStartsWith("0", $result);
   }
}