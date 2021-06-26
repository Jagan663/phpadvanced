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
		    	<div class="formheading mb-2">See Flight Peference! </div>
		    	<table border="1">
		    		<tr>
		    			<th>Name</th>
		    			<td><input type="text" name="first_name"></td>
		    		</tr>
		    		<tr>
		    			<th>Seat Selection</th>
		    			<td>
		    				<input type="radio" name="seat" value="Aside"> Aside 
		    				<input type="radio" name="seat" value="Window"> Window 
		    				<input type="radio" name="seat" value="Center"> Center 
		    			</td>
		    		</tr>
		    		<tr>
		    			<th>Meal Selection</th>
		    			<td>
		    				<input type="radio" name="meal" value="Veg"> Veg 
		    				<input type="radio" name="meal" value="Non-Veg"> Non-veg 
		    				<input type="radio" name="meal" value="Diabetie"> Diabetie 
		    				<input type="radio" name="meal" value="child"> Child 
		    			</td>
		    		</tr>
		    		<tr>
		    			<td colspan="2"><input type="submit" name="save" Value="SUBMIT"></td>
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

	session_start();
	$name = $_POST['first_name'];
	$seat = $_POST['seat'];
	$meal = $_POST['meal'];
	setcookie("name",$name);
	setcookie("seat",$seat);
	setcookie("meal",$meal);
	if (isset($_COOKIE["name"]) && isset($_COOKIE["meal"]) && isset($_COOKIE["seat"])) {
		echo "Cookie has been set!.<br><br>____________________<br><br>";
		echo "Press <a href='II-sem(2)a.php' style='border:1px solid black;padding:4px;'>Go</a> to view Cookie..<br>";
	}else{
		echo "Cookie not set";
	}
}
?>