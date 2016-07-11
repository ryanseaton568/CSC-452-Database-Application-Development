<?
/*
PROGRAM DESCRIPTION: Prompt the user for their name and 3 test grades, ranging from 0 to 100. 
					 Find the average. Then tell the user what their letter grade is.
NAME: Joseph Seaton
CLASS: CSC 452.001
DATE COMPLETED: 2/15/2016
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
echo "<h2> Therefore, your AVERAGE test grade should be ".$Average.".</h2>";
echo "<br>";

if($Average >= 90){
	echo  "<h3> Since your Average is ".$Average. " , you made an A! Congratulations!</h3>";
}//End If statement for letter A Grade
else if($Average <= 89 && $Average >= 80){
	echo  "<h3> Since your Average is ".$Average. " , you made an B.</h3>";
}//End Else If statement for letter B Grade
else if($Average <= 79 && $Average >= 70){
	echo  "<h3> Since your Average is ".$Average. " , you made an C.</h3>";
}//End Else If statement for letter C Grade
else if($Average <= 69 && $Average >= 60){
	echo  "<h3> Since your Average is ".$Average. " , you made an D.</h3>";
}//End Else If statement for letter D Grade
else {
	echo  "<h3> Since your Average is ".$Average. " , you made an F.</h3>";
}//End Else statement for letter F Grade
?>