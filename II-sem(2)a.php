<?php
define('DIR','');
session_start();
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

	<form action="II-sem(2)a.php" method="post" enctype="multipart/form-data">
		<div class="row">
	  	<div class="leftcolumn">
		    <div class="card">
		    	<div class="formheading mb-2">JSD FLIGHTS </div>
		    	<div>
		    		<label>Thank You for choosing JSD Flight</label>
		    	</div>
		    	<div>
		    		<label>The Cookie values are</label>
		    	</div>
		    	<div>
		    		<label>Name : <?php echo $_COOKIE["name"]; ?></label><br>
		    		<label>Seat : <?php echo $_COOKIE["seat"]; ?></label><br>
		    		<label>Food : <?php echo $_COOKIE["meal"]; ?></label><br>
		    		<label>---------------------------------------------------</label>
		    	</div>
		    </div>
		</div>
	</div>
	</form>
</body>
</html>
