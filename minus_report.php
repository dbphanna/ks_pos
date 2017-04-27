<?php include 'config/db_connect.php';
// check if user is not logged in 
ob_start();
session_start();
if(empty($_SESSION['user_id'])) {
  header('location:index.php');
  exit();
}
?>
<?php
	include "header.php";
?>
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-body">
							<h2 class="text-primary">Stock minus report</h2>
              				<hr>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
	  							<table id="example" class="display" cellspacing="0" width="100%">
	    							<thead>
											<tr>
												<th>No</th>
												<th>Code</th>
												<th>Name</th>
												<th>Ref</th>
												<th>Old Qty</th>
												<th>Minus</th>
												<th>Price</th>
												<th>Amount</th>
												<th>Employee</th>
												<th>Date</th>
												<th>Note</th>
												<th>Delete</th>
											</tr>
	    							</thead>
	    							<tfoot>
											<tr>
													<th>No</th>
													<th>Code</th>
													<th>Name</th>
													<th>Ref</th>
													<th>Old Qty</th>
													<th>Minus</th>
													<th>Price</th>
													<th>Amount</th>
													<th>Employee</th>
													<th>Date</th>
													<th>Note</th>
													<th>Delete</th>
											</tr>
	    							</tfoot>
	    							<tbody>
										<tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
											<td><a href="" class="btn btn-danger btn-xs" ><i class="fa fa-trash" aria-hidden="true"></i></a></td>
										</tr>
	    							</tbody>
	  					       </table>
		          			</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	include "footer.php";
?>
