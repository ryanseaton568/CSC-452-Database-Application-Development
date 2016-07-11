<!--
PROGRAM DESCRIPTION: Prompt the user to select their height. 
					 Once a height is selected send a message that tells the user what a health weight is.
NAME: Joseph Seaton
CLASS: CSC 452.001
DATE COMPLETED: 2/15/2016
-->
<html>
 <html><head><title>Height</title></head>
 <body bgcolor="lightgreen">
 <font face="arial" size="+1">
 <p>
 <?php
 extract($_REQUEST);
 if ( ! isset ($submit_height)) { // check that variables were set
 exit;
 }
 ?>
 <?php
 switch ( $height ) {
 case "5ft0":
 print "<h3>You should weigh between 95 and 128 pounds.</h3>";
 break;
case "5ft2":
 print "<h3>You should weigh between 101 and 136 pounds.</h3>";
 break;
case "5ft4":
 print "<h3>You should weigh between 108 and 145 pounds.</h3>";
 break;
case "5ft6":
 print "<h3>You should weigh between 115 and 154 pounds.</h3>";
 break; default:
 print "<h3>Please select an option.</h3>";
 break;
 case "5ft8":
 print "<h3>You should weigh between 122 and 164 pounds.</h3>";
 break;
 case "5ft10":
 print "<h3>You should weigh between 129 and 174 pounds.</h3>";
 break;
 }
?>
 </font>
 </body>
 </html>