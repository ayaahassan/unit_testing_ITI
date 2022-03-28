<?php
require "./vendor/autoload.php";

use App\Checkout;
  class FileTest extends PHPUnit\Framework\TestCase {
       
       
  function testFactorialPositive()
  {
     $ch = new Checkout();
     $this->assertTrue($ch->factorial(5)==120);
  }
  function testFactorialZero()
  {
     $ch = new Checkout();
     $this->assertTrue($ch->factorial(0)==1);
  }
  
  function testFactorialOne()
  {
     $ch = new Checkout();
  $this->assertTrue($ch->factorial(1)==1);  
  }
  
  function testFactorialNegative()
  
  {

     $ch = new Checkout();
     $this->assertTrue($ch->factorial(-1)==null);
  }
  
  function testFactorialString()
  
  {
       
     $ch = new Checkout();
     $this->assertTrue($ch->factorial("abc")==null); 
  }
  function testFactorialFalse()
  
  {
       
     $ch = new Checkout();
     $this->assertTrue($ch->factorial(false)==null); 
  }
  function testFactorialFloat()
  
  {       
     $ch = new Checkout();
     $this->assertTrue($ch->factorial(1.2)==null); 
  }
  
  }
  
