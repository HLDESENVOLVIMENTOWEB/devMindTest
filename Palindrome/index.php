
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palindrome</title>
</head>
<body>
    <h2>Palindrome</h2>
    <?php if(isset($_GET["result"])){echo "Result: ".$_GET["result"]."<br><br>";}  ?>

    <h3>Enter the word verify palindrome:</h3>
    <form action="verifyPalindrome.php" method="post">
         <label for="word">
                  Word:
            <input type="text" name="word">
        </label>
        <br><br>
        <br><br>
        <input type="submit" value="Check">
        <a href="index.php">Clean</a>
    </form>


   
</body>
</html>  