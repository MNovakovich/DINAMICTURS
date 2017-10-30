<?php
session_start();
if ( $_SESSION['user'] == "") {
	 header("location: index.php");
}
require_once "../config.php";
require "includes/heder.php";
//session_start();


?>

			

					<div class="page-content">
				

			
								
								
						
							<h2>Dodaj novu fotografiju </h2>

							<div class="row" >
							    <div style="border:1px solid blue; padding: 20px;" class="col-md-4 col-offset-4">
							
								<form method="post" action="#" enctype="multipart/form-data" class="form-horizontal">
									  
									  
									    <label for="slider_img" class="col-sm-2 foto">Fotografija</label>
									    
									      <input type="file" class="foto" name="upload_foto" placeholder="Dodaj sliku" value=""><br>
						
									   
									      <button type="submit" class="btn btn-default" name="upload" >Dodaj</button>&nbsp;&nbsp;
								

									</form>

			                    </div><!-- offset -->

							</div><!-- row -->    

							<hr>             
							

                                   <?php
                                     
                         if (isset($_POST['upload'])) 
							{
								                                                       
								 $insert_slider= new Media;
								 $insert_slider->uploadImg($_FILES['upload_foto']); 

                               
                            

                             ?>
                                    <div class="row">
                                   	  
                                   	   <div class="col-md-10 col-offset-2">
                                   	       <div class="col-md-5">
                                   	           	<img src="<?="../images/uploads/".$_FILES['name'];?>">
                                   	     	</div>
                                   	     	<div class="col-md-7"> </div>
                                   	        
                                   	   </div>

                                          
                                   </div><!-- row -->
                                   <h3>kopiraj link</h3><br>";
                                   	   	<a href="#"><h1> <?="images/uploads/".$_FILES['name'];?></h1></a>

                              <?php
                             }
                              ?>
							<!-- ***************************************************************************** -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		<?php
			require "includes/footer.php";