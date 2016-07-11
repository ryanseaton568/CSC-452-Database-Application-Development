<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>TAL Distributions</title>
  <link rel="stylesheet" type="text/css" href="452Project.css" />
</head>
<body>
  <img src="TAL-Logo.gif" width="100" height="100" style="float:left" />
  <img src="TAL-Logo.gif" width="100" height="100" style="float:right" />
  <br>
  <br>
  <h1 class="h1text"> Updated Customer Data!</h1>
  <br>
  <br>
  <br>
  <div class="dropdown" style="float:middle">
  <button class="dropbtn">Options</button>
  <div class="dropdown-content">
    <a href="index.php">Return to the Home Page</a>
    <a href="updatedOverview.php">Return to the Overview Page</a>
  </div>
</div>
<?php

if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['customerNum'])){

        // Adds name to array
        $data_missing[] = 'Customer Number';

    } else {

        // Trim white space from the data and stores it
        $c_num = trim($_POST['customerNum']);

    }

    if(empty($_POST['customerName'])){

        // Adds name to array
        $data_missing[] = 'Customer Name';

    } else{

        // Trim white space from the data and stores it
        $c_name = trim($_POST['customerName']);

    }

    if(empty($_POST['street'])){

        // Adds name to array
        $data_missing[] = 'Street';

    } else {

        // Trim white space from the data and stores it
        $street = trim($_POST['street']);

    }

    if(empty($_POST['city'])){

        // Adds name to array
        $data_missing[] = 'City';

    } else {

        // Trim white space from the data and stores it
        $city = trim($_POST['city']);

    }

    if(empty($_POST['state'])){

        // Adds name to array
        $data_missing[] = 'State';

    } else {

        // Trim white space from the data and stores it
        $state = trim($_POST['state']);

    }

    if(empty($_POST['postalCode'])){

        // Adds name to array
        $data_missing[] = 'PostalCode';

    } else {

        // Trim white space from the data and stores it
        $p_code = trim($_POST['postalCode']);

    }

    if(empty($_POST['balance'])){

        // Adds name to array
        $data_missing[] = 'Balance';

    } else {

        // Trim white space from the data and stores it
        $bal = trim($_POST['balance']);

    }

    if(empty($_POST['creditLimit'])){

        // Adds name to array
        $data_missing[] = 'Credit Limit';

    } else {

        // Trim white space from the data and stores it
        $c_limit = trim($_POST['creditLimit']);

    }

    if(empty($_POST['repNum'])){

        // Adds name to array
        $data_missing[] = 'RepNum';

    } else {

        // Trim white space from the data and stores it
        $r_num = trim($_POST['repNum']);

    }

    }//End if starting on line 8
    
    if(empty($data_missing)){
        
        require_once('connectvars.php');
        // Should insert data entered by user. If not data is entered, '?' should
		// appear instead.
        $query = "INSERT INTO CUSTOMER (CustomerNum, CustomerName, Street,
        City, State, PostalCode, Balance, CreditLimit, RepNum) VALUES (?, ?, ?,
        ?, ?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
		//Bind my parameters
        mysqli_stmt_bind_param($stmt, "ssssssdds", $c_num,
                               $c_name, $street, $city, $state,
                               $p_code, $bal, $c_limit, $r_num);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            echo 'Customer Entered';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        
    }
    
}//end if on line 141

?>

<form action="updatedCustomerAdded.php" method="post">

<p>Customer Number:
<input type="text" name="CustomerNum" size="30" value="" />
</p>

<p>Customer Name:
<input type="text" name="CustomerName" size="30" value="" />
</p>

<p>Street:
<input type="text" name="Street" size="30" value="" />
</p>

<p>City:
<input type="text" name="City" size="30" value="" />
</p>

<p>State (2 Characters):
<input type="text" name="State" size="30" maxlength="2" value="" />
</p>

<p>Postal Code:
<input type="text" name="PostalCode" size="30" maxlength="5" value=" " />
</p>

<p>Balance:
<input type="text" name="Balance" size="30" value="" />
</p>

<p>Credit Limit:
<input type="text" name="CreditLimit" size="30" value="" />
</p>

<p>Rep Number:
<input type="text" name="RepNum" size="30" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send" />
</p>
    
</form>
</body>
</html>