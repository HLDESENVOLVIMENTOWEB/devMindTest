<?php
require_once "class/factorial.php";
$factorial = new Factorial();

$number = $_POST['n1'];

$factorial->setNumber($number);
$number = $factorial->getNumber();

header("Location:index.php?result=".$factorial->factorial($number));
?>