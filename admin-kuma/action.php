<?php
session_start();
if ( $_SESSION['user'] == "") {
	 header("location: index.php");
}

 include_once "../config.php";


// forma sa stranice slider.php  unos novog slajdera	                              
if (isset($_POST['insr_slider']) && isset($_POST['slider_url'])) 
{
	                                                       
	 $insert_slider= new Slider;
	 $insert_slider->uploadImg($_FILES['slider_img']); 
	 $insert_slider->slika_slajder = "images/uploads/".$_FILES['name'];
	 $insert_slider-> save();
		
	 header("Location:slider.php?uploaded=success");
	
	                                 
	                                       
 } 
 elseif (isset($_POST['insr_izdvajamo'])) 
     {
	                                                       
	 $insert_slider= new Izdvajamo;
	 $insert_slider->uploadImg($_FILES['izdvajamo_img']); 
	 //$insert_slider->uploadImg($_FILES['izdvajamo_url']); 
	 $insert_slider->foto = "images/uploads/".$_FILES['name'];
	 $insert_slider->url = $_POST['izdvajamo_url'];
	 $insert_slider-> save();
		
	 	header("Location:izdvajamo.php?uploaded=success");
	}
	

