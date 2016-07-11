<?
/*
PROGRAM DESCRIPTION: Calculate the volume of a room that is 12.5 feet long, 9.8 feet wide, and 10.5 feet high.
NAME: Joseph Seaton
CLASS: CSC 452.001
DATE COMPLETED: 2/3/2016
*/
echo '<link rel="stylesheet" type="text/css" href="Ch5Ex3.css">';
$Length = 12.5;
$Width = 9.8;
$Hight = 10.5;
$Volume = $Length * $Width * $Hight;


echo "<h3> Thank you, the length you input was: ".$Length." feet long.</h3>";
echo "<h3> The width you input was: ".$Width." feet wide.</h3>";
echo "<h3> The hight you input was: ".$Hight." feet high.</h3>";
echo "<h2> Therefore, your VOLUME should be ".$Volume.".</h2>";
?>