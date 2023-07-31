<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
</head>
<?php 
require_once "class/table.php";
$table = new Table();
?>
<body>
    <h2>Table</h2>

    
    <form action="index.php" method="post">
         <label for="number">
                  Number:
            <input type="text" name="number">
        </label>
        <br><br>
        <br><br>
        <input type="submit" value="check">
        <a href="index.php">Clean</a>
    </form>

    <div>
     <?php 
     if(isset($_POST['number'])){
        $table->setNumber($_POST['number']);
        echo $table->getTable();     
     }
     ?>
    </div>

   
</body>
</html>