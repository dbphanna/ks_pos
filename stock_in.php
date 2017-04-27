<?php
	include "header.php";
?>
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-body">
							<h2 class="text-primary">Stock In</h2>
              				<hr>

							<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</button>
							 <!-- Modal -->
							 <div id="myModal" class="modal fade" role="dialog">
								 <div class="modal-dialog modal-lg">
									 <!-- Modal content-->
									 <div class="modal-content">
										 <div class="modal-header">
											 <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
											 <h4 class="modal-title"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</h4>
										 </div>
										 <div class="modal-body">
					                       <form class="form-horizontal">
					                         <div class="form-group">
					                            <label class="control-label col-sm-3" for="email">Product Code:</label>
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
					                             <label class="control-label col-sm-3" for="email">Price:</label>
					                             <div class="col-sm-9">
					                               <input type="text"  class="form-control" id="email" placeholder="">
					                             </div>
					                          </div>
					                          <div class="form-group">
					                             <label class="control-label col-sm-3" for="email">Qty:</label>
					                             <div class="col-sm-9">
					                               <input type="text"  class="form-control" id="email" placeholder="">
					                             </div>
					                          </div>
					                          <div class="form-group">
					                             <label class="control-label col-sm-3" for="email">Amount:</label>
					                             <div class="col-sm-9">
					                               <input type="text"   class="form-control" id="email" placeholder="">
					                             </div>
					                          </div>
					                          <div class="form-group">
					                             <label class="control-label col-sm-3" for="email">Supplier:</label>
					                             <div class="col-sm-9">
					                                  <select class="form-control" name="category">
					                                      <option value=""></option>
					                                      <option value=""></option>
					                                  </select>
					                             </div>
					                          </div>
					                          <div class="form-group">
					                             <label class="control-label col-sm-3" for="email">Employee:</label>
					                             <div class="col-sm-9">
					                                  <select class="form-control" name="category">
					                                      <option value=""></option>
					                                      <option value=""></option>
					                                  </select>
					                             </div>
					                          </div>
					                          <div class="form-group">
					                              <label class="control-label col-sm-3" for="email">Date:</label>
					                              <div class="col-sm-9">
					                                <input type="text" data-field="datetime" class="form-control" id="email" placeholder="">
					                                <div id="dtBox"></div>
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
					                                <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i> Close</button>
					                             </div>
					                          </div>
					                        </form>
										 </div>
										 <div class="modal-footer">

										 </div>
									 </div>
								 </div>
							 </div>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
  							<table id="example" class="display" cellspacing="0" width="100%">
    							<thead>
    									<tr>
											<th>No</th>
											<th>Category</th>
											<th>Code</th>
											<th>Name</th>
											<th>Unit</th>
					            <th>Price</th>
                      <th>Qty</th>
                      <th>Amount</th>
                      <th>Photo</th>
                      <th>Supplier</th>
                      <th>Employee</th>
                      <th>Date</th>
                      <th>Note</th>
    									<th><i class="fa fa-cog fa-spin fa-1x fa-fw"></i>
    									<span class="sr-only">Loading...</span>Action</th>
    									</tr>
    							</thead>
    							<tfoot>
    									<tr>
												<th>No</th>
												<th>Category</th>
												<th>Code</th>
												<th>Name</th>
												<th>Unit</th>
						            <th>Price</th>
	                      <th>Qty</th>
	                      <th>Amount</th>
	                      <th>Photo</th>
	                      <th>Supplier</th>
	                      <th>Employee</th>
	                      <th>Date</th>
	                      <th>Note</th>
    										<th><i class="fa fa-cog fa-spin fa-1x fa-fw"></i>
    											<span class="sr-only">Loading...</span>Action</th>
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
                      <td></td>
                      <td></td>
    										<td align : center>
                           <a href="#" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>
    										</td>
    									</tr>
    							</tbody>
  					    </table>
		          </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footer.php';?>
