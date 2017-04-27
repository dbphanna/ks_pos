	<?php 	if (isset($_GET['inv'])) {
		$inv = $_GET['inv'];
	} ?>
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
				      <li><a href="#" style="color:blue;"><i class="fa fa-file-text" aria-hidden="true"></i> Invoice No: <?php echo $inv?></a></li>
				      <!-- <li><a href="b">Page 2</a></li>
				      <li><a href="c">Page 3</a></li> -->
				    </ul>
				  </div>
				</nav>
        <div class="panel panel-headline">
          <div class="panel-heading" style="background:lightblue;height:60px;" >
          </div>
					<hr>
					<div class="panel-body">
						<form class="form-inline">
						  <div class="form-group">
						    <label for="email"><i class="fa fa-barcode" aria-hidden="true"></i> Barcode:</label>
								<select class="form-control select2" style="width:400px;height:60px;" name="">
										<option value=""></option>
								</select>
						  </div>


						  <button type="submit" class="btn btn-primary"><i class="fa fa-arrow-down" aria-hidden="true"></i> Add</button>
						</form>
					</div>
					<hr>
          <div class="panel-body">
            <div class="col-md-9">
              <div class="thumbnail" style="height:450px auto;border-color:lightblue">
                <div class="table-responsive">
                  <table id="" class="table-striped  table-condensed" cellspacing="0" width="100%">
                    <thead style="background:lightblue">
                        <tr>
                            <th>No</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Ref</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Amount</th>
                            <th>Discount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-percent" aria-hidden="true"></i></button>
															<!-- Modal -->
															<div id="myModal" class="modal fade" role="dialog">
															  <div class="modal-dialog">

															    <!-- Modal content-->
															    <div class="modal-content">
															      <div class="modal-header">
															        <button type="button" class="close" data-dismiss="modal">&times;</button>
															        <h4 class="modal-title">Modal Header</h4>
															      </div>
															      <div class="modal-body">
															        <p>Some text in the modal.</p>
															      </div>
															      <div class="modal-footer">
															        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															      </div>
															    </div>

															  </div>
															</div>
															<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-money" aria-hidden="true"></i></button>
															<!-- Modal -->
															<div id="myModal" class="modal fade" role="dialog">
															  <div class="modal-dialog">

															    <!-- Modal content-->
															    <div class="modal-content">
															      <div class="modal-header">
															        <button type="button" class="close" data-dismiss="modal">&times;</button>
															        <h4 class="modal-title">Modal Header</h4>
															      </div>
															      <div class="modal-body">
															        <p>Some text in the modal.</p>
															      </div>
															      <div class="modal-footer">
															        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															      </div>
															    </div>

															  </div>
															</div>
                            <td>
                                <a href="#" class="btn btn-success btn-xs" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
            </div>
         </div>
          <div class="col-md-3">
              <div class="thumbnail" style="border-color:lightblue">
				<div class="panel-body">
					<form>
						<div class="form-group">
							<label for="email">Total:</label>
							<input type="text" class="form-control" >
						</div>
						<div class="form-group">
							<label for="pwd">Deposit:</label>
							<input type="text" class="form-control" >
						</div>
						<div class="form-group">
							<label for="pwd">Discount:</label>
							<input type="text" class="form-control" >
						</div>
						<div class="form-group">
							<label for="pwd">Balance:</label>
							<input type="text" class="form-control" >
						</div>
						<button type="submit" class="btn btn-success btn-success btn-lg"><i class="fa fa-handshake-o" aria-hidden="true"></i> Tender</button>
						</form>
				</div>
              </div>
          </div>
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
