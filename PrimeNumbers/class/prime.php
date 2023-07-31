<?php

class Prime{
    private $number;
    private $numbers;
    private $firstPrimeNumers;
 
    function __construct(){
        $this->total = 0;
        $this->number = 0;
        $this->numbers = 2;
    }
    public function setNumber($number){
        $this->number = $number;
    }
    public function getfirstPrimeNumers() {
        return $this->firstPrimeNumers;
    }
    public function setFirstPrimeNumers($firstPrimeNumers)
    {
        $this->firstPrimeNumers = $firstPrimeNumers;
    }
    public function checkPrime(){
        $isTruePrimeNumber = $this->getPrimeNumbers($this->number);
  
        if(!$isTruePrimeNumber)  {
            $this->total = "Not Prime Number";
        } else {
            $this->total = "Prime number!";
        } 
    }
    public function getTotal(){
        return $this->total;
    }

    public function getPrimeNumbers($number){
        for ($divisor = 2; $divisor < $number; $divisor++){
            if ($number % $divisor == 0) { 
                return false;
            };
            return true;
        };
    }

    public function firstPrimeNumers() {
        $qtPrimeNumber = 1;

        while($qtPrimeNumber <= $this->firstPrimeNumers)
        {
         
          $isTruePrimeNumber = $this->getPrimeNumbers($this->numbers);
          
          if($isTruePrimeNumber){
           echo "Prime: $this->numbers </br>";
           $qtPrimeNumber = $qtPrimeNumber + 1;  
          }

          $this->numbers++;
        }   
       
    }
}