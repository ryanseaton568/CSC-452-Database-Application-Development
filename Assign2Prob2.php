<?
/*
PROGRAM DESCRIPTION: Prompt the user for their name and 3 test grades, ranging from 0 to 100. Find the average.
NAME: Joseph Seaton
CLASS: CSC 452.001
DATE COMPLETED: 2/3/2016
*/
echo '<link rel="stylesheet" type="text/css" href="Ch5Ex3.css">';
$Name = $_POST["name"];
$Test1 = $_POST["test1"];
$Test2 = $_POST["test2"];
$Test3 = $_POST["test3"];
$Average = ($Test1 + $Test2 + $Test3) / 3;


echo "<h3> Thank you, ".$Name.".</h3>";
echo "<h3> The first test grade you input was: ".$Test1.".</h3>";
echo "<h3> The second test grade you input was: ".$Test2.".</h3>";
echo "<h3> The third test grade you input was: ".$Test3.".</h3>";
echo "<h2> Therefore, your AVERAGE test grade should be ".$Average."."
?>