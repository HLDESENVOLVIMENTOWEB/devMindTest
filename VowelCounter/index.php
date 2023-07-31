<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vowel Counter</title>
</head>
<?php 
require_once "class/vowelCounter.php";
$vowelCounter = new VowelCounter();
?>
<body>
    <h2>Vowel Counter</h2>

    
    <form action="index.php" method="post">
         <label for="sentence">
                  Sentence:
            <input type="text" name="sentence">
        </label>
        <br><br>
        <br><br>
        <input type="submit" value="check">
        <a href="index.php">Clean</a>
    </form>

    <div>
     <?php 
     if(isset($_POST['sentence'])){
        $vowelCounter->setString($_POST['sentence']);
        echo $vowelCounter->vowelCount();   
     }
     ?>
    </div>

   
</body>
</html>