<?php

require_once "class/calculator.php";

$number1 = $_POST['n1'];
$number2 = $_POST['n2'];
$operations = $_POST['operations'];

$calculator = new Calculator();

$calculator->setNumber1($number1);
$calculator->setNumber2($number2);
switch($operations){
    case "sum":
        $calculator->sum();
        break;
    case "subtract":
        $calculator->subtract();
        break;
    case "divide":
        $calculator->divide();
        break;
    case "multiply":
        $calculator->multiply();
        break;
}

header("Location:index.php?total=".$calculator->getTotal());