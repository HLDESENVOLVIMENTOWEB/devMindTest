<?php
require_once "class/palindrome.php";
$palindrome = new Palindrome();


$word = $_POST['word'];

$palindrome->setWord($word);

if($palindrome->verifyPalindrome()){
    $result = "Palindrome";
} else {
    $result = "Not Palindrome";
}

header("Location:index.php?result=".$result);


?>