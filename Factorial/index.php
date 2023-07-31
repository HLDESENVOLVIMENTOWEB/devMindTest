<?php
require_once "class/factorial.php";
$factorial = new Factorial();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factorial</title>
</head>
<body>
    <h2>Factorial</h2>

    <h3>Factorial number 7</h3>
    <?php    
    $factorial->setNumber(7);
    $number = $factorial->getNumber();
    echo "<h3>".$factorial->factorial($number)."</h3>";
    ?>

    ========================================</br>

    <?php if(isset($_GET["result"])){echo "Result: ".$_GET["result"]."<br><br>";}  ?>

    <h3>Enter the number to calculate factorial:</h3>
    <form action="calculate.php" method="post">
         <label for="n1">
                  Number:
            <input type="text" name="n1">
        </label>
        <br><br>
        <br><br>
        <input type="submit" value="Calculate">
        <a href="index.php">Clean</a>
    </form>


   
</body>
</html>  