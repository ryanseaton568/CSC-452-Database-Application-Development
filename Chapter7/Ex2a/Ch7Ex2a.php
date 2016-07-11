<!--
PROGRAM DESCRIPTION: Write a loop that will add 2 inches in height and 7 pounds in weight each time its looped.
					 Until the hight reaches 6 ft 10 and weight is 171 pounds.
NAME: Joseph Seaton
CLASS: CSC 452.001
DATE COMPLETED: 2/15/2016
-->
<html>
 <html><head><title>Loop</title></head>
 <body bgcolor="lightgreen">
 <font face="arial" size="+1">
 <p>
 <?php
$H=0;
$W = 136;
 while($W <= 171){
 print "6 ft ".$H." = ".$W.".";
 echo "<br>";
 if ( $W == 171 || $H ==10 ){
//Break out of loop
 break;
 }
 $H+=2;
 $W+=7;
 }
?>
 </font>
 </body>
 </html>