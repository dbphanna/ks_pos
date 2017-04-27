<?php include 'config/db_connect.php';
// check if user is not logged in 
ob_start();
session_start();
if(empty($_SESSION['user_id'])) {
  header('location:index.php');
  exit();
}
$sql ="SELECT * FROM exchange";
$result = mysqli_query($connect, $sql);

if (isset($_POST['add'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];

	$sql = "UPDATE exchange SET ex_rate = '$name' WHERE ex_id = '$id'";
	$result = mysqli_query($connect, $sql);
	if ($result) {
		header("location:exchage_rate.php");
	}
}
?>
<?php include "header.php";?>
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->

					<div class="panel panel-headline">
						<div class="panel-body">
							<h2 class="text-primary">Exchange Rate</h2>
              				<hr>
							
						</div>
						<!-- <hr style = "border:1px solid #0081C2"> -->
						<div class="panel-body">
							<div class="table-responsive">
  							<table id="example" class="display" cellspacing="0" width="100%">
    							<thead>
									<tr>
										<th>No</th>
										<th>Exchange Rate</th>
										<td>Change</td>
										
									</tr>
    							</thead>
    							<tfoot>
    								<tr>
				                      <th>No</th>
				                      <th>Exchange Rate</th>
				                      <td>Change</td>
    								</tr>
    							</tfoot>
    							<tbody>
    								<?php while ($row = $result->fetch_assoc())
    								 {
    								?>
	    							<tr>
										<td><?php echo $row['ex_id']; ?></td>
										<td><?php echo $row['ex_rate'];?></td>
										<td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-usd" aria-hidden="true"></i> Change </button>
							 <!-- Modal -->
							 <div id="myModal" class="modal fade" role="dialog">
								 <div class="modal-dialog">
									 <!-- Modal content-->
									 <div class="modal-content">
										 <div class="modal-header">
											 <button type="button" class="close" data-dismiss="modal">&times;</button>
											 <h4 class="modal-title"><i class="fa fa-usd" aria-hidden="true"></i> Change</h4>
										 </div>
										 <div class="modal-body">
					                       <form class="form-horizontal" method = "POST" action = "">
					                          <div class="form-group">
					                             <label class="control-label col-sm-3" for="email">Exchange Rate:</label>
					                             <div class="col-sm-9">
					                               <input type="hidden" class="form-control" name="id" placeholder="" value = "<?php echo $row['ex_id']; ?>">
					                               <input type="number" class="form-control"  name="name" placeholder="" value = "<?php echo $row['ex_rate']; ?>">
					                             </div>
					                          </div>
					                          
					                          <div class="form-group">
					                             <div class="col-sm-offset-3 col-sm-9">
					                               <button type="submit" name = "add" class="btn btn-success btn-xs"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
					                                <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i> Close</button>
					                             </div>
					                          </div>
					                        </form>
										 </div>
										 <div class="modal-footer">

										 </div>
									 </div>
								 </div>
							 </div></td>
	    							</tr>
	    							<?php 
	    							}
	    							 ?>
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
