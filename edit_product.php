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
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->

					<div class="panel panel-headline">
						<div class="panel-body">
							<h2 class="text-primary">Edit Product</h2>
							<!-- <p class="panel-subtitle">ប្រភេទក្រុមទំនិញ</p> -->
              <hr>
						</div>
						<!-- <hr style = "border:1px solid #0081C2"> -->
						<div class="panel-body">
              				<form class="form-horizontal">
		                         <div class="form-group">
		                            <label class="control-label col-sm-3" for="email">Product Code:</label>
		                            <div class="col-sm-9">
		                              <input type="text" class="form-control" id="email" placeholder="">
		                            </div>
		                         </div>
														 <div class="form-group">
																<label class="control-label col-sm-3" for="email">Category:</label>
																<div class="col-sm-9">
																		 <select class="form-control" name="category">
																				 <option value=""></option>
																				 <option value=""></option>
																		 </select>
																</div>
														 </div>
		                         <div class="form-group">
		                             <label class="control-label col-sm-3" for="email">Product Name:</label>
		                             <div class="col-sm-9">
		                               <input type="text"  class="form-control" id="email" placeholder="">
		                             </div>
		                          </div>
															<div class="form-group">
 		                             <label class="control-label col-sm-3" for="email">Ref:</label>
 		                             <div class="col-sm-9">
 		                               <input type="text"  class="form-control" id="email" placeholder="">
 		                             </div>
 		                          </div>
															<div class="form-group">
 		                             <label class="control-label col-sm-3" for="email">Price:</label>
 		                             <div class="col-sm-9">
 		                               <input type="text"  class="form-control" id="email" placeholder="">
 		                             </div>
 		                          </div>
															<div class="form-group">
 		                             <label class="control-label col-sm-3" for="email">Cost:</label>
 		                             <div class="col-sm-9">
 		                               <input type="text"  class="form-control" id="email" placeholder="">
 		                             </div>
 		                          </div>
		                          <div class="form-group">
		                             <label class="control-label col-sm-3" for="email">Unit:</label>
		                             <div class="col-sm-9">
		                                  <select class="form-control" name="category">
		                                      <option value=""></option>
		                                      <option value=""></option>
		                                  </select>
		                             </div>
		                          </div>
		                           <div class="form-group">
		                               <label class="control-label col-sm-3" for="email">Photo:</label>
		                               <div class="col-sm-9">
		                                 <input type="file" name = "img">
		                               </div>
		                            </div>
		                          <div class="form-group">
		                             <label class="control-label col-sm-3" for="pwd">Note:</label>
		                             <div class="col-sm-9">
		                                <textarea class="form-control" name="note" rows="4"></textarea>
		                             </div>
		                          </div>
		                          <div class="form-group">
		                             <div class="col-sm-offset-3 col-sm-9">
		                               <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
		                                <a href="" class = "btn btn-danger btn-xs">Back</a>
		                             </div>
		                          </div>
		                        </form>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
	include "footer.php";
?>
