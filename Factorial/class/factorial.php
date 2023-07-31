<?php

class Factorial {
    private $number;

    function __construct(){
        $this->number = 0;
    }

    public function setNumber($number){
        $this->number = $number;
    }

    public function getNumber(){
        return $this->number;
    }

    public function factorial($number){
        if($number <= 1) {  
            return 1;  
          }  
          else{  
            return $number * $this->factorial($number - 1);  
          }  
    }
}

?>