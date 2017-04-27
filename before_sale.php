<?php 	
		if (isset($_POST['add'])) {
			$number = $_POST['number'];
			header("location:sale.php?inv=$number");
		}
 ?>
<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maxi	mum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="stylesheet" type="text/css" href="assets/css/select2.css">
  	 <link rel="stylesheet" type="text/css" href="assets/datatable/jquery.dataTables.min.css">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
  <div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
      <div class="container-fluid">
        <!-- OVERVIEW -->
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <ul class="nav navbar-nav">
				      <li><a href="index.php" style="color:red;"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back</a></li>
				      <li>
				      <a href="#" style="color:blue;"><i class="fa fa-file-text" aria-hidden="true"></i> Invoice No:</a>	
				      </li>	
				      <li><a href="">
				      	<form class="form-inline" action="" method="POST">
								  <div class="form-group">
								   
								    <input type="text" name = "number" class="form-control" id="pwd" autofocus="">
								  </div>
								  
								  <button type="submit" name = "add" class="btn btn-primary">Ok</button>
							</form>
				      </a></li>
				    </ul>
				  </div>
				</nav>
				<div class="panel panel-headline">
        		  <div class="panel-heading" style="background:lightblue;height:60px;" >
         		 </div>
          </div>
      </div>
    </div>
  </div>
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script src ="assets/datatable/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src = "assets/js/select2.min.js"></script>
	<script type="text/javascript">
		$('select').select2();
	</script>
	<script>
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
	</script>
</body>
</html>
