<?php
define('DIR','');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		/* Left column */
		.leftcolumn {   
		  float: left;
		  width: 40%;
		}

		.mb-2 {
			margin-bottom: 10px;
		}

		.form-control {
			width: 50%;
		}

		/* Right column */
		.rightcolumn {
		  float: left;
		  width: 25%;
		  background-color: #f1f1f1;
		  padding-left: 20px;
		}

		/* Add a card effect for articles */
		.card {
		  background-color: white;
		  padding: 20px;
		  margin-top: 20px;
		}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Footer */
		.formheading {
		  padding: 10px;
		  text-align: center;
		  background: #ddd;
		  margin-top: 20px;
		}
		/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 800px) {
		  .leftcolumn, .rightcolumn {   
		    width: 100%;
		    padding: 0;
		  }
		}
	</style>
</head>
<body>

	<form action="#" method="post" enctype="multipart/form-data">
		<div class="row">
	  	<div class="leftcolumn">
		    <div class="card">
		    	<div class="formheading mb-2">Jagans Bank! (Open Account)</div>
		    	<table border="1">
		    		<tr>
		    			<th>Account Number</th>
		    			<td><input type="text" name="acno" id="acno"></td>
		    		</tr>
		    		<tr>
		    			<th>First Name</th>
		    			<td><input type="text" name="fname" id="fname"></td>
		    		</tr>
		    		<tr>
		    			<th>Last Name</th>
		    			<td><input type="text" name="lname" id="lname"></td>
		    		</tr>
		    		<tr>
		    			<th>Enter DOB</th>
		    			<td><input type="date" name="dob" id="dob"></td>
		    		</tr>
		    		<tr>
		    			<th>Select Gender</th>
		    			<td>
		    				<input type="radio" name="gender" value="Male"> Male 
		    				<input type="radio" name="gender" value="Female"> Female 
		    				<input type="radio" name="gender" value="Other"> Other 
		    			</td>
		    		</tr>
		    		<tr>
		    			<th>Amount</th>
		    			<td><input type="number" name="amt" id="amt"></td>
		    		</tr>
		    		<tr>
		    			<td colspan="2"><input type="submit" name="save" Value="CREATE"></td>
		    		</tr>
		    	</table>
		    </div>
		</div>
	</div>
	</form>
</body>
</html>

<?php
if (isset($_POST['save'])) {

	$con = mysqli_connect("localhost","root","","jagan");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
if($_POST['amt']< '500'){
 echo "Minimum amount must be greater than 500 is required";
}else{
	$qry = mysqli_query($con,"SELECT * FROM bank where acno=".$_POST['acno']);
	
if (mysqli_num_rows($qry)>0) {
	echo "Account number already Exist";
}else{

	$query = mysqli_query($con,"INSERT INTO `bank`(`acno`, `fname`, `lname`, `dob`, `gender`, `balance`) VALUES ('".$_POST['acno']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['amt']."')")or die(mysqli_error($con));
if ($query) {
	echo "data uploaded";
}else{
	echo "data Not uploaded";
}
}
}


}
?>