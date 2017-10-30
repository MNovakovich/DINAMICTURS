<?php
class Media extends ActiveRecord {

		public  function uploadImg($upl)
            {

          echo "<br>";
             $_errors = false;
            $_FILES  = $upl;
	        if (isset($_FILES)) {
	         $errors= [];
            


          echo "<br>";
            
	        
	      	 $image = $_FILES['name'];
	      	 $type = $_FILES['type'];
	      	 $tmp_name = $_FILES['tmp_name'];
	      	 $size = $_FILES['size'];
	      	 $error = $_FILES['error'];
	          echo "<br>";
	        // echo $img = pathinfo($image,PATHINF_BASENAME);
	        	$target_file =  basename($image);
		   
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
             $target_dir = "../images/uploads/".$image;
			 if ($_FILES["size"] > 500000) {
                $_errors[]="slika  je prevelika !!!<br> velicina ne sme da prelazi 50kb";
                
              } 
              if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                 && $imageFileType != "pdf" ) {
                  $_errors = "Format nije odgovajrajuc";
                   $uploadOk = 0;
               } 

              if (empty($_errors) ==  true) {
              	echo "<h2 style='color:blue;margin-left:300px;'>Uspesno ste uradili upload slike</h2>";
                   return $uploadFoto = 	move_uploaded_file($tmp_name, $target_dir);
              }
                 echo "<h2 style='color:red; margin-left:30px;'>".$_errors[0]."</h2>";
            
               
               }
             
      }
}