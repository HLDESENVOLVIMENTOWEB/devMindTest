<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prime Numbers</title>
</head>
<body>
    <h2>Prime Numbers</h2>

    <?php if(isset($_GET["total"])){echo "Result: ".$_GET["total"]."<br><br>";}  ?>
    <form action="primeNumbers.php" method="post">
         <label for="n1">
                  Number:
            <input type="text" name="n1">
        </label>
        <br><br>
        <br><br>
        <input type="submit" value="check">
        <a href="index.php">Clean</a>
    </form>

    <div>
    <ol>
        <li></li>
    </ol>
    </div>

   
</body>
</html>