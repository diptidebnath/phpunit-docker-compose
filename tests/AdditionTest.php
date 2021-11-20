<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include "Calculator.php";

final class AdditionTest extends TestCase
{
   public function testAddOneAndThreeEqualsFour() : void
   {
       $result = Calculator::addition(1, 3);
       $this->assertEquals(4, $result);
   }
   
   public function testAddtwoAndFiveEqualsSeven() : void

   {
    $result = Calculator::addition(2, 5);
    $this->assertEquals(7, $result);
}
}