<?php
	include "config/connect.php";
	session_start();
    $errors = "";                           
// check if users already logged in 
	if(isset($_SESSION['user_id'])) {
		header('location:dashboard.php');
		exit();
	}

if( !empty($_POST) ) {

	$username = $_POST['user'];
	$password = $_POST['pass'];

	if( empty($username) == true OR empty($password) == true ) {
		$errors = "<div class = 'alert alert-danger'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<h6>No username/password in field</h6></div>
		";
	} 
	else {
		// if username exists
		$sql = "SELECT * FROM user WHERE user_name = '$username'";
		$query = $connect->query($sql);
		if( $query->num_rows > 0 ) {
		// check username and password
			$password = md5($password);

			$sql = "SELECT * FROM user WHERE user_name = '$username' AND password = '$password'";
			$query = $connect->query($sql);
			$result = $query->fetch_array();

			$connect->close();

			if($query->num_rows == 1) {				
				$_SESSION['logged_in'] = true;
				$_SESSION['user_id'] = $result['user_id'];

				header('location:category.php');
				exit();
			}	
			else {
				$errors = "<div class = 'alert alert-danger'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<h6>Username/Password combination is incorrect</h6></div>
		";
			}
		} 	
		else {
			$errors = "<div class = 'alert alert-danger'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<h6>User name password not correct</h6></div>
		";
		}
	}

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
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
<div id="wrapper">
    <div class="row" style = "margin-top:25px;">
		<div class="col-xs-12 col-md-6 col-md-offset-3">
			<div class="auth-box">
				<div class="content">
					<div class="header">
						<div class="text-center text-primary"><h2>Welcome</h2></div>
					</div>
						 <form class="" action="#" method = "POST">
					 		<div class	= "form-group col-xs-12">
					 			<?php echo $errors?>
					 		</div>
							<div class="form-group col-xs-12">
								<input type="text" class="form-control" id="signin-email" name="user" placeholder="Username">
							</div>
							<div class="form-group col-xs-12">
								<input type="password" class="form-control" id="signin-password" name="pass" placeholder="Password">
							</div>
							
							<div class="form-group col-xs-12">
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							</div>
						 </form>
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
	<script>
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
	</script>
</body>
</html>
