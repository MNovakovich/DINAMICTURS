<?php
session_start();
if ( $_SESSION['user'] == "") {
	 header("location: index.php");
}

require "../config.php";	
$selectedSlider = new Slider;

print_r($selectedSlider);
if (isset($_POST['insr_slider'])) {
	print_r($_POST);
}elseif (isset($_POST['upd_slider'])) {
	
    $selectedSlider->slika_slajder="tratata";
    $selectedSlider->url = "pamparara";
}


  

/*
switch ($_POST) {
	case '[insr_slider]':
			 print_r($_POST);
		break;
	case '[upd_slider]':
			 print_r($_POST);
		break;
	default:
		# code...
		break;
}*/
