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
							<h2 class="text-primary">Edit Category</h2>
							<!-- <p class="panel-subtitle">ប្រភេទក្រុមទំនិញ</p> -->
              <hr>
						</div>
						<!-- <hr style = "border:1px solid #0081C2"> -->
						<div class="panel-body">
              <form class="form-horizontal">
                 <div class="form-group">
                    <label class="control-label col-sm-3" for="email">Category Name:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="email" placeholder="">
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd">Note:</label>
                    <div class="col-sm-6">
                       <textarea class="form-control" name="note" rows="4"></textarea>
                    </div>
                 </div>
                 <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                      <a href="" class="btn btn-danger btn-xs"><i class="fa fa-undo" aria-hidden="true"></i>Back</a>
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
		