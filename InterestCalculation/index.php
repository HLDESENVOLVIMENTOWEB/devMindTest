

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interest Calculation</title>
</head>
<body>
    <h2>Interest Calculation</h2>

    <form action="index.php" method="post">
        <label for="months">
               Months:
            <input type="text" name="months">
        </label>
        <br><br>
        <label for="initialInvestment">
              Initial Investment:
            <input type="text" name="initialInvestment">
        </label>
        <br><br>
        <label for="interestRate">
              InterestRate:
            <input type="text" name="interestRate">
        </label>
        <label for="monthlyInvestment">
            Monthly Investment:
            <input type="text" name="monthlyInvestment">
        </label>
        <br><br>
        <input type="submit" value="average">
        <a href="index.php">Clean</a>
    </form>


   
</body>
</html>  


<?php

require_once "class/interestCalculation.php";
$interestCalculation = new InterestCalculation();


   if(isset($_POST['months']) && isset($_POST['initialInvestment'])  && isset($_POST['interestRate'])  && isset($_POST['monthlyInvestment'])){

    $interestCalculation->setMonths($_POST['months']);
    $interestCalculation->setInitialInvestment($_POST['initialInvestment']);
    $interestCalculation->setInterestRate($_POST['interestRate']);
    $interestCalculation->setMonthlyInvestment($_POST['monthlyInvestment']);
    $interestCalculation->setAccumulatedInvestment(0);

    $interestCalculation->calculateInvestiment();

  } else {
    echo "É preciso preencher todos os campos";
  }

?>