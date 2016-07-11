<!--
PROGRAM DESCRIPTION: Prompt the user to select a location they would like to travel to. 
					 Once a location is selected send a message relative to that location.
NAME: Joseph Seaton
CLASS: CSC 452.001
DATE COMPLETED: 2/15/2016
-->
<html>
 <html><head><title>City</title></head>
 <body bgcolor="lightgreen">
 <font face="arial" size="+1">
 <p>
 <?php
 extract($_REQUEST);
 if ( ! isset ($submit_city)) { // check that variables were set
 exit;
 }
 ?>
 <?php
 switch ( $city ) {
 case "sanfrancisco":
 print "<h3>Bring a jacket!</h3>";
 break;
case "newyork":
 print "<h3>Check out the big apple!</h3>";
 break;
case "london":
 print "<h3>Sexy accents allllll day</h3>";
 break;
case "paris":
 print "<h3>Want to see the Eiffel Tower?</h3>";
 break; default:
 print "<h3>Want to see the Eiffel Tower?</h3>";
 break;
 case "honolulu":
 print "<h3>Time to relax on the islands!</h3>";
 break;
 case "tokyo":
 print "<h3>Sushi time!</h3>";
 break;
 }
?>
 </font>
 </body>
 </html>