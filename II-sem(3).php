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
		    	<div class="formheading mb-2">Login Session </div>
		    	<table border="1">
		    		<tr>
		    			<th><label>Username</label></th>
		    			<td><input type="text" name="Username"></td>
		    		</tr><tr>
		    			<th><label>password</label></th>
		    			<td><input type="password" name="pass"></td>
		    		</tr>
		    		<tr>
		    			<td colspan="2"><input type="submit" name="save" Value="LOGIN"></td>
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
		$_SESSION['name'] = $_POST['Username'];
	
	if (!isset($_SESSION['count'])) {
		$_SESSION['count'] = 1;
		echo "<b>".$_SESSION['name']."<b><br><br><br>";
		echo "This is your first visit";
	}else{
		$_SESSION['count']++;

		echo "<b>".$_SESSION['name']."<b><br><br><br>";
		echo "Your Visiting count is <b>".$_SESSION['count'];
	}
	
}
?>