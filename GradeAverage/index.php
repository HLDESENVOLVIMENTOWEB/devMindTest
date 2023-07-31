
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade Average</title>
</head>
<body>
    <h2>Grade Average</h2>
    <?php if(isset($_GET["result"])){echo "Result: ".$_GET["result"]."<br><br>";}  ?>
    <?php if(isset($_GET["round"])){echo "Rounded result: ".$_GET["round"]."<br><br>";}  ?>

    <form action="average.php" method="post">
        <label for="noteMatch">
               Match:
            <input type="text" name="noteMatch">
        </label>
        <br><br>
        <label for="noteGeography">
                Geography:
            <input type="text" name="noteGeography">
        </label>
        <br><br>
        <label for="notePhysics">
                Physics:
            <input type="text" name="notePhysics">
        </label>
        <br><br>
        <input type="submit" value="average">
        <a href="index.php">Clean</a>
    </form>


   
</body>
</html>  