<?php

namespace App;

class User
{
    private $name;
    private $email;
    function __construct($name,$email)
    {
     $this->name=$name;
     $this->email=$email;
    }
    function UserName($name="")
    {
        if($name!=null){
            //set name
            $this->name=$name;
        }
        return $this->name;
    }
    // function UserName($name)
    // {
    //    $this->name=$name;
    //    return $this->name;
    // }
    function UserEmail($email="")
    {
      //$this->=$email;
      if($email!=null){
        //set name
        $this->email=$email;
    }
       return $this->email;
    }
    
}
