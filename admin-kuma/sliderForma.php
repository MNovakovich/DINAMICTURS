<?php
session_start();
if ( $_SESSION['user'] == "") {
	 header("location: index.php");
}
 include_once "../config.php";
include_once "includes/heder.php";


if (!isset($_GET['chng_img']) && !is_numeric($_GET['chng_img'])) {
	 die("niste odabrali slajder");
}else {

     $slider_id = $_GET['chng_img'];
     $slider = Slider::get("id = {$slider_id}");

  if (isset($_POST['upd_slider']) ) {
	    $uploadSlider = new Slider;
	    $uploadSlider->uploadImg($_FILES['slider_img']);
	    $uploadSlider->slika_slajder = "images/uploads/".$_FILES['name'];
	    $uploadSlider->url = $_POST['slider_url'];
	    $uploadSlider->update("id = ".$_POST['slider_id']);

         echo "<h2 style='color:blue;margin-left:300px;'> vratite se na predhodnu  <a href='slider.php'>STRANU</a></h2>";

   }

?>
                           <div style="width: 600px; height:450px; padding: 15px;" id="slajderIzmeni">
                              <h3>Izmeni slajder</h3>
                              <form action="" method="post" enctype="multipart/form-data">
									  <div class="form-group">
									    <label for="slider_id" class="col-sm-2 control-label">id</label>
									    <div class="col-sm-2">
									      <input type="text" class="form-control" name="slider_id" placeholder="" value="<?=$slider->id;?>">
									    </div>
									  </div>
									  <br><br><br><hr>
									  <div class="form-group">
									    <label for="slider_img" class="col-sm-2 foto_drzava">Fotografija</label>
									    <div class="col-sm-4">
									      <input type="file" class="foto_drzava" name="slider_img" placeholder="Dodaj sliku" value="<?=$slider->slika_slajder;?>"><br>
									      <img style='width: 100x; height: 80px' src="../<?=$slider->slika_slajder;?>"><br>
									    </div><br><br><br><hr>
									  </div>
									  <br><br><hr>
									  <div class="form-group">
									    <label for="slider_url" class="col-sm-2 control-label">lilnk</label>
									    <div class="col-sm-8">
									      <input type="text" class="form-control" name="slider_url" placeholder="http://www." value="<?=$slider->url;?>">
									    </div>
									  </div>
									  
									  <div class="form-group">
									    <div class="col-sm-offset-2 col-sm-10">
									       <button type="submit" class="btn btn-default" name="upd_slider" >Izmeni</button>&nbsp;&nbsp;
									      <
									      <button type="reset" class="btn btn-default" name="rest_slider" >Reset</button>
									    </div>
									  </div>
									</form>
                            </div><!-- slajder izmeni -->
					<?php
				}
	

include_once "includes/footer.php";