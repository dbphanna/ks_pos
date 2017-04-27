<!doctype html>
<html lang="en">

<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" type="text/css" href="dist/DateTimePicker.css" />
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	 <link rel="stylesheet" type="text/css" href="assets/datatable/jquery.dataTables.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="user.php"><i class="lnr lnr-user"></i> <span>User Setting</span></a></li>
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
			        <ul class="nav">
						<li><a href="dashboard.php" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
						<li><a href="before_sale.php" class=""><i class="fa fa-truck" aria-hidden="true"></i> <span>Sale</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fa fa-university" aria-hidden="true"></i> <span>Stock Management</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="category.php" class=""><i class="lnr lnr-list"></i> <span>Category</span></a></li>
									<li><a href="unit.php" class=""><i class="fa fa-cube" aria-hidden="true"></i></i> <span>Unit</span></a></li>

									<li><a href="Supplier.php" class=""><i class="fa fa-truck" aria-hidden="true"></i> <span>Supplier</span></a></li>
									<li><a href="product.php" class=""><i class="fa fa-cubes" aria-hidden="true"></i> <span>Product</span></a></li>
									<li><a href="Stock_in.php" class=""><i class="fa fa-share" aria-hidden="true"></i><span>Stock In</span></a></li>
									<li><a href="stock_out.php" class=""><i class="fa fa-reply" aria-hidden="true"> </i> <span>Stock Out</span></a></li>
									<li><a href="stock_balance.php" class=""><i class="fa fa-server" aria-hidden="true"></i><span>Stock Balance </span></a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="fa fa-pencil" aria-hidden="true"></i> <span>Stock Adjustment</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="stock_plus.php" class=""><i class="fa fa-plus-square" aria-hidden="true"></i> <span>Stock Add More</span></a></li>
									<li><a href="stock_minus.php" class=""><i class="fa fa-minus-square" aria-hidden="true"></i> <span>Stock minus </span></a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i> <span>Adjustment Report</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="plus_report.php" class=""><i class="fa fa-plus-square" aria-hidden="true"></i> <span> Add More Report</span></a></li>
									<li><a href="minus_report.php" class=""><i class="fa fa-minus-square" aria-hidden="true"></i> <span> minus Report</span></a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Employee</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" class="collapse ">
								<ul class="nav">
									<li><a href="employee.php" class=""><i class="lnr lnr-user"></i> <span> Name List</span></a></li>
									<li><a href="Position.php" class=""><i class="fa fa-bars" aria-hidden="true"></i> <span> Position</span></a></li>
									<li><a href="Salary.php" class=""><i class="fa fa-money" aria-hidden="true"></i> <span> Salary</span></a></li>
								</ul>
							</div>
						</li>
						<li><a href="exchage_rate.php" class=""><i class="fa fa-usd" aria-hidden="true"></i> <span>Exchange Rete</span></a></li>
						<li><a href="logout.php" class=""><i class="lnr lnr-power-switch"></i> <span>Log Out</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
