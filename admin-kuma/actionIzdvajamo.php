<?php
 include_once "../config.php";
 if (isset($_POST['insr_izdvajamo'])) 
     {
	                                                       
	 $insert_slider= new Izdvajamo;
	 $insert_slider->uploadImg($_FILES['izdvajamo_img']); 
	 //$insert_slider->uploadImg($_FILES['izdvajamo_url']); 
	 $insert_slider->foto = "images/uploads/".$_FILES['name'];
	 $insert_slider->url = "images/uploads/".$_POST['izdvajamo_url'];
	 $insert_slider-> save();
		
	@header("Location:izdvajamo.php?uploaded=success");
	}
	
