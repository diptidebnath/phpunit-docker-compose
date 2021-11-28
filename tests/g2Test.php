<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include "g2.php";

final class g2Test extends TestCase
{
   public function testHejsan() : void
   {
       $result = Changecase::capitalize("hejsan");
      $this->assertEquals("Hejsan", $result);
   }
  
}