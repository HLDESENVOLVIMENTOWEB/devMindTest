<?php


class Palindrome {
    private $word;

    function __construct(){
        $this->word = '';
    }

    public function setWord($word) {
        $this->word = $word;
    }

    public function verifyPalindrome() {
        if (strrev($this->word) == $this->word){ 
            return true; 
        }
        else{
            return false;
        }
    }
}

?>