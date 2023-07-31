<?php

class NotaMedia {
    private $noteMatch;
    private $noteGeography;
    private $notePhysics;

    function __contructor(){
        $this->noteMatch = 0;
        $this->notaGeography = 0;
        $this->notaPhysics = 0;
    }

    public function setNotaMath($noteMatch){
        $this->noteMatch = $noteMatch;
    }
    public function setNotaGeography($noteGeography){
        $this->noteGeography = $noteGeography;
    }
    public function setNotaPhysics($notePhysics){
        $this->notePhysics = $notePhysics;
    }

    public function average() {
        return ($this->noteMatch + $this->noteGeography + $this->notePhysics)/3;
    }
}

?>