<?php


class InterestCalculation {
    private $initial_investment;
    private $monthly_investment;
    private $months;
    private $interest_rate;
    private $total_compound_interest;
    private $compound_interest;
    private $accumulated_investment;
    private $amount_to_receive;

    function __construction() {
        $this->initial_investment = 7000;
        $this->monthly_investment = 500;
        $this->months = 7;
        $this->interest_rate = 15;
        $this->accumulated_investment = 0;
    }

    public function setInitialInvestment($initial_investment){
        $this->initial_investment = $initial_investment;
    }

    public function setMonths($months){
        $this->months = $months;
    }

    public function setInterestRate($interest_rate){
        $this->interest_rate = $interest_rate;
    }

    public function setTotalCompoundInterest($total_compound_interest){
        $this->total_compound_interest = $total_compound_interest;
    }

    public function setMonthlyInvestment($monthly_investment){
        $this->monthly_investment = $monthly_investment;
    }

    public function setAmountToReceive($amount_to_receive){
        $this->amount_to_receive = $amount_to_receive;
    }

    public function setAccumulatedInvestment($accumulated_investment){
        $this->accumulated_investment = $accumulated_investment;
    }

    public function getTotalCompoundInterest(){
        return $this->total_compound_interest;
    }

    public function getAmountToReceive(){
        return $this->amount_to_receive;
    }

    public function getAccumulatedInvestment(){
        return $this->accumulated_investment;
    }

    
    public function calculateInvestiment(){
        for ($i = 0; $i < $this->months; $i++) {
            $this->compound_interest = ($this->accumulated_investment * $this->interest_rate) / 100;
            $this->total_compound_interest += $this->compound_interest;
            $this->accumulated_investment += $this->compound_interest + $this->monthly_investment;
        }
        
        $amount_to_receive = $this->accumulated_investment + $this->total_compound_interest;

        echo "Amount Invested: " . number_format($amount_to_receive, 2, ",", ".") . "<br>" . "<br>";
        echo "Total interest is: " . number_format($this->total_compound_interest, 2, ",", ".") . "<br>" . "<br>";
        echo "Total amount receivable is: " . number_format($this->accumulated_investment, 2, ",", ".") . "<br>" . "<br>";
        echo "Months: " . number_format($this->months, 2, ",", ".") . "<br>" . "<br>";
    }

}