<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
class Title {

     public static function getTitle($title) {

     // echo "<title>".$title."</title>";
     }

}
?>
   <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,100italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="lightbox/css/lightbox.css">

<!--***************************************************************************************** -->
  <!-- css kojom uredjujem odmaralista -->
     <link rel="stylesheet" href="admin-kuma/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="admin-kuma/assets/css/colorbox.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="admin-kuma/assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="admin-kuma/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="admin-kuma/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="admin-kuma/assets/css/ace-rtl.min.css" />

  <!-- *********************************************************************************** -->


<link rel="stylesheet" type="text/css" href="css/hoteli.css">

<script>
$(document).ready(function(){
  $('.partners').bxSlider({
    slideWidth: 220,
    minSlides: 2,
    maxSlides: 6,
    slideMargin: 25,
	moveSlides: 1,
	pager: false,
	auto: true
  });
});
</script>


<script>
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
</script>

<script>
$(document).ready(function() {
		
	var respmenu 		= $('#respmenu');
	var	menu 			= $('#nav>ul');

	$(respmenu).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var sirina = $(window).width();
		if(sirina > 768 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}	
	});
	
});	


</script>

<script type="text/javascript">
  /* javascript za postepeni (smooth scroll) - ovaj deo koda je sa sajta css-tricks */
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
</script>
</head>

<body>

	<div id="header">
    
    	<div id="headerTop">
        	<div class="wrapper">
            	<div id="headerTopLeft">
					<span><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;+387 49 217 627</span>
          <span><i class="fa fa-lg fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;e-mail: office@dinamikturs.com</span>

                </div>

            	<div id="headerTopRight">
              
                   <a class="gornjiMeni" href="uslovi.php">Uslovi putovanja</a>
                   <a class="gornjiMeni" href="#">Zaposlenje</a>
                	<a href="https://www.facebook.com/dinamik.turs" target="_blank"><i class="fa fa-lg fa-facebook-square"></i></a>
                	<a href="#" target="_blank"><i class="fa fa-lg fa-twitter-square"></i></a>
                	<a href="#" target="_blank"><i class="fa fa-lg fa-linkedin-square"></i></a>
                </div>
            </div>
        </div>
        
        <div id="headerBottom">
          	<div class="wrapper">
              
              	<div id="logo">
                  	   <a href="index.php">
                      	<img style="height:100px;" src="images/logoNovo.png" alt="logo">
                      </a>
                 </div><!-- #logo -->
           
                  <nav id="nav">
                   
                  	  <ul> 
                        <li><a href="index.php" class="dugme">NASLOVNA</a></li>
                        <li><a href="firstMinut.php" class="dugme">FIRST MINUTE</a></li>
                        <li><a href="lastMinut.php" class="dugme">LAST MINUTE</a></li>
                        <li><a href="ljetovanja" class="dugme">LJETOVANJA</a></li>
                        <li><a href="jesen.php">JESEN</a></li>
                        <li><a href="ekskurzije.php">EKSKURZIJE</a></li>
                        <li><a href="agencija" class="dugme">Agencija</a></li>
                      <li><a href="#">Avio karte</a></li>

                      <li><a href="kontakt.php">kontakt</a></li>
                     
                      
                      </ul>
                      <a href="#" id="respmenu" class="button"><i class="fa fa-lg fa-navicon"></i>&nbsp;&nbsp;&nbsp;&nbsp;Navigacija</a>
                  </nav>
              </div><!-- #headerBottom -->
           
        </div>   
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </div><!-- kraj #header -->
    
  