<?php
	include "header.php";
?>
		
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-body">
							<h2 class="text-primary">Edit Supplier</h2>
             			 <hr>
						</div>
						<div class="panel-body">
			              <form class="form-horizontal">
	                          <div class="form-group">
	                             <label class="control-label col-sm-3" for="email"> Name:</label>
	                             <div class="col-sm-9">
	                               <input type="text" class="form-control" id="email" placeholder="">
	                             </div>
	                          </div>
	                          <div class="form-group">
	                             <label class="control-label col-sm-3" for="email">Contact Person:</label>
	                             <div class="col-sm-9">
	                               <input type="text" class="form-control" id="email" placeholder="">
	                             </div>
	                          </div>
	                          <div class="form-group">
	                             <label class="control-label col-sm-3" for="email"> Phone:</label>
	                             <div class="col-sm-9">
	                               <input type="text" class="form-control" id="email" placeholder="">
	                             </div>
	                          </div>
	                          <div class="form-group">
	                             <label class="control-label col-sm-3" for="email"> Address:</label>
	                             <div class="col-sm-9">
	                               <input type="text" class="form-control" id="email" placeholder="">
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
					</div>
				</div>
			</div>
		</div>
<?php
	include "footer.php";
?>
		