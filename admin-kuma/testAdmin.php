<html>

<header></header>
<style type="text/css">
	body a {
		display: inline;
		padding-right: 5px;
		margin: 30px solid blue;

		float: left;
}

img {

	margin: 3px solid blue;

}
#slike{
	margin-top: 30px;
}
#input{
	position: absolute;
	top:5px;
	right: 100px;
	width: 300px;
}
</style>
<body>
<h1>aplovdovane fotografije</h1>
<?php
session_start();
require "../config.php";

?>
 <div id="slike">
<?php

$dh = opendir("../images/uploads/2017");
while (false !== ($file = readdir($dh))){
echo "<a href='?url=".$file."'><img style='width:100px;' src='../images/uploads/2017/{$file}'><br>";
}
?>
</div>
<?php

if (isset($_GET['url'])) {

	$uploadsFolder = "images/uploads/2017/".$_GET['url'];
	?>
	<form id='input'>
     
      <a href="../<?=$uploadsFolder;?>" target="_blank"><?=$uploadsFolder;?></a>

      </form>
	<?php
}



/*



$dir = "../images/uploads/2017";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
  	$output = [];
    while (($file = readdir($dh)) !== false){
    	echo "<img style='width:100px; float:left;' src='../images/uploads/2017/".$file."'><br>";
                 //$output[]=$file;

    	
    }

  //$arr = array_keys($output);
  //print_r($arr);
   // 
    
    closedir($dh);
  }
}*/
?>
</body>
</html>