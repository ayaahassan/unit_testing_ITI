<?php
//namespace App;

require "./vendor/autoload.php";
//require "./src/User.php";
use App\User;

  class UserTest extends PHPUnit\Framework\TestCase {
       
    private static $objuser;
    public static function setUpBeforeClass(): void
    {
        self::$objuser = new User('aya','ayahassan@gmail.com');
    } 
    public function testUserName()
    {
        $this->assertTrue(self::$objuser->UserName()=='aya');

    }
    public function testUserNameparameter()
    {
        $this->assertTrue(self::$objuser->UserName('hassan')=='hassan');

    }
    public function testUserEmail()
    {
        $this->assertTrue(self::$objuser->UserEmail()=='ayahassan@gmail.com');

    }
    public function testUserEmailparameter()
    {
        $this->assertTrue(self::$objuser->UserEmail('aya@gmail.com')=='aya@gmail.com');

    }
 
  
  }
  
