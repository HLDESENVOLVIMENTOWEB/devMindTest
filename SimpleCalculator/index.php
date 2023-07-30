<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>

    <?php if(isset($_GET["total"])){echo "Result: ".$_GET["total"]."<br><br>";}  ?>
    <form action="calculate.php" method="post">
         <label for="n1">
                  Number 1:
            <input type="text" name="n1">
        </label>
        <br><br>
        <label for="n2">
                 Number 2:
            <input type="text" name="n2">
        </label>
        <br><br>
        Operations: <br>
        <label for="operations">
            <input type="radio" name="operations" value="sum">
            Sum(+)
        </label>
        <label for="operations">
            <input type="radio" name="operations" value="subtract">
            Subtract(-)
        </label>
        <label for="operations">
            <input type="radio" name="operations" value="divide">
            Divide (/)
        </label>
        <label for="operations">
            <input type="radio" name="operations" value="multiply">
            Multiply(x)
        </label>
        <br><br>
        <input type="submit" value="calculate">
        <a href="index.php">Clean</a>
    </form>
    
</body>
</html>