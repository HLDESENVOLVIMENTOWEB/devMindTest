<?php
require_once "class/average.php";
$notaMedia = new NotaMedia();


$noteMatch = $_POST['noteMatch'];
$noteGeography = $_POST['noteGeography'];
$notePhysics = $_POST['notePhysics'];

$notaMedia->setNotaMath($noteMatch);
$notaMedia->setNotaGeography($noteGeography);
$notaMedia->setNotaPhysics($notePhysics);

header("Location:index.php?result=".$notaMedia->average()."&round=".round($notaMedia->average(), 2));


?>