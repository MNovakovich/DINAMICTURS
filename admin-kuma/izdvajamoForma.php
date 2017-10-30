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

     $id = $_GET['chng_img'];
     $izdvajamo = Izdvajamo::get("id = {$id}");
     print_r($izdvajamo);

  if (isset($_POST['upload']) ) {
	    $uploadSlider = new Izdvajamo;
	    $uploadSlider->uploadImg($_FILES['slika']);
	    $uploadSlider->foto = "images/uploads/".$_FILES['name'];
	    $uploadSlider->url = $_POST['url'];
	    $uploadSlider->update("id = ".$_POST['izdvajamo_id']);

         echo "<h2 style='color:blue;margin-left:300px;'> vratite se na predhodnu  <a href='izdvajamo.php'>STRANU</a></h2>";

   }

?>
                           <div style="width: 600px; height:450px; padding: 15px;" id="slajderIzmeni">
                              <h3>Izmeni novosti - IZDVAJAMO</h3>
                              <form action="#" method="post" enctype="multipart/form-data">
									  <div class="form-group">
									    <label for="id" class="col-sm-2 control-label">id</label>
									    <div class="col-sm-2">
									      <input type="text" class="form-control" name="izdvajamo_id" placeholder="" value="<?=$izdvajamo->id;?>">
									    </div>
									  </div>
									  <br><br><br><hr>
									  <div class="form-group">
									    <label for="img" class="col-sm-2 foto_drzava">Fotografija</label>
									    <div class="col-sm-4">
									      <input type="file" class="foto_drzava" name="slika" placeholder="Dodaj sliku" value="<?=$izdvajamo->foto;?>"><br>
									      <img style='width: 100x; height: 80px' src="../<?=$izdvajamo->foto;?>"><br>
									    </div><br><br><br><hr>
									  </div>
									  <br><br><hr>
									  <div class="form-group">
									    <label for="url" class="col-sm-2 control-label">lilnk</label>
									    <div class="col-sm-8">
									      <input type="text" class="form-control" name="url" placeholder="http://www." value="<?=$izdvajamo->url;?>">
									    </div>
									  </div>
									  
									  <div class="form-group">
									    <div class="col-sm-offset-2 col-sm-10">
									       <button type="submit" class="btn btn-default" name="upload" >Izmeni</button>&nbsp;&nbsp;
									      <
									      <button type="reset" class="btn btn-default" name="rest_slider" >Reset</button>
									    </div>
									  </div>
									</form>
                            </div><!-- slajder izmeni -->
					<?php
				}
	

include_once "includes/footer.php";