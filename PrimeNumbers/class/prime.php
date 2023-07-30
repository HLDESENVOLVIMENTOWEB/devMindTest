<?php

class Prime{
    private $number;
    private $divisores;

    function __construct(){
        $this->total = 0;
        $this->number = 0;
        $this->divisores = 0;
    }
    public function setNumber($number){
        $this->number = $number;
    }
    public function checkPrime(){
        for($count=2; $count<$this->number; $count++){
            if($this->number % $count == 0){
               // echo "Multiplo de $count<br />";
                $divisores++;
            }
        }
  
        if($divisores)  {
            $this->total = "Not Prime Number, has $divisors divisors other than 1 and itself";
        } else {
            $this->total = "Prime number!";
        } 
    }
    public function getTotal(){
        return $this->total;
    }
}