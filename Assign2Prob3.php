<?
/*
PROGRAM DESCRIPTION: Gather the Sales and Expenses of a Book Store and find their Operation Income & Income After Taxes
NAME: Joseph Seaton
CLASS: CSC 452.001
DATA COMPLETED: 2/3/2016
*/
echo '<link rel="stylesheet" type="text/css" href="Q4.css">';
$Sales = $_POST["sales"];
$Rent = $_POST["rent"];
$Salary = $_POST["salary"];
$Supplies = $_POST["supplies"];
$TotalExpense = $Rent + $Salary + $Supplies;
$OperatingIncome = $Sales - $TotalExpense;
$IncomeAfterTaxes = $OperatingIncome * .6;


echo '<body style="background-color:lightblue">';
echo '<font face="arial" size="+1">';
echo "<pre>============================================
                 Book Store                 
============================================\n
 Sales:        $".$Sales."
 
 Expenses:
    Rent:      $".$Rent."
    Salary:    $".$Salary."
    Supplies:  $".$Supplies."
 
 Total:
    Operating income:   $".$OperatingIncome."
    Income after taxes: $".$IncomeAfterTaxes."
 
============================================</pre>";
?>