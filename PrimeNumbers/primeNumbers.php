<?php

require_once "class/prime.php";

$number = $_POST['n1'];

$calculator = new Prime();

$calculator->setNumber($number);
$calculator->checkPrime();

header("Location:index.php?total=".$calculator->getTotal());