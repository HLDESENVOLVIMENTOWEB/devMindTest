<?php

class Table {
    private $number;

    function __construct(){
        $this->number = 0;
    }

    public function setNumber($number){
        $this->number = $number;
    }

    public function getTable(){
    
        $result = "<ol>";
        for ($i = 1; $i <= 10; $i++) {
            $result .= "<li>". $this->number ."&nbsp; X &nbsp;". $i  ."&nbsp; = &nbsp; <strong>".$this->number*$i."</strong></li>";
        }
        $result .= "</ol>";
        echo $result;
    }
}


?>