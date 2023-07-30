<?php

class Calculator{
    private $total;
    private $n1;
    private $n2;

    function __construct(){
        $this -> total = 0;
        $this -> n1 = 0;
        $this -> n2 = 0;
    }
    public function setNumber1($n1){
        $this -> n1 = $n1;
    }
    public function setNumber2($n2){
        $this -> n2 = $n2;
    }
    public function sum(){
        $this->total = $this->n1 + $this->n2;
    }
    public function subtract(){
        $this->total = $this->n1 - $this->n2;
    }
    public function divide(){
        $this->total = $this->n1 / $this->n2;
    }
    public function multiply(){
        $this->total = $this->n1 * $this->n2;
    }
    public function getTotal(){
        return $this->total;
    }
}