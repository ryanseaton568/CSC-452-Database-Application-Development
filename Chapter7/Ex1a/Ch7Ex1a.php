<?
/*
PROGRAM DESCRIPTION: Prompt the user for their age, and determine if they can or cannot drink. 
					 If they can drink, warn them not to drink and drive.
NAME: Joseph Seaton
CLASS: CSC 452.001
DATE COMPLETED: 2/15/2016
*/
echo '<link rel="stylesheet" type="text/css" href="Ch5Ex3.css">';
$Age = $_POST["age"];

if ($Age >= 21){
	echo "<h3> Since your age is ".$Age.", you may drink, but do not drive!</h3>";
}
else{
	echo "<h3> Since your age is ".$Age.", you cannot drink!</h3>";
}
?>