<?php

namespace App;

class Checkout
{
    
    
    public function factorial($num)
    {
    
      if(is_numeric($num)&&is_int($num))
      {
        if($num>1)
          return $num*$this->factorial($num-1);
        else if($num<0)
          return null;
         else 
         return 1;
    }
    else
    return null;
    }
}
