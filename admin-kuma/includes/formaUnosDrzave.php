<?php
// FORMA KOJA SE NALAZI NA STRANICI drzaveAdmin.php i koja snima u tabelu drzaveLjeto

?>	
	<div class="col-md-5" id="main">
			<div class="naslovForme">
				<h2>dodaj novu drzavu</h2>
			</div>
				<form method="post" action="testAdmin.php" enctype="multipart/form-data" class="form-horizontal">
									   <div class="form-group">
										      <label for="drzava_id" class="col-sm-2 control-label">id</label>
										       <div class="col-sm-2">
										             <input type="text" class="form-control" name="drzava_id" placeholder="">
									           </div>

									   </div>

									   <div class="form-group">
										    <label for="drzavaNaziv" class="col-sm-2 control-label">Drzava</label>
										     <div class="col-sm-8">
										           <input type="text" class="form-control" name="drzava" placeholder="Drzava">
										    </div>
									   </div>

									   <div class="form-group">
										    <label for="drzavaNaziv" class="col-sm-2 foto_drzava">Fotografija</label>
										    <div class="col-sm-3">
										          <input type="file" class="foto_drzava" name="foto_drzava" placeholder="Dodaj sliku">
										    </div>
									   </div>
									  
									  <div class="form-group">
									    <div class="col-sm-offset-2 col-sm-10">
									      <button type="submit" class="btn btn-default" name="sbt_drzave" >Dodaj</button>
									    </div>
									  </div>
								</form>

			                

</div><!-- col md 5 -->
