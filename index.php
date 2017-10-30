<?php
session_start();
require_once "config.php";

    ?>
 <!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dinamic tours</title>


   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,100italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/hoteli.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


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
<script type="text/javascript">
  /* javascript za postepeni (smooth scroll) - ovaj deo koda je sa sajta css-tricks */
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

        var meta = $(this.hash);
        meta = meta.length ? meta : $('[name=' + this.hash.slice(1) +']');
        if (meta.length) {
          $('html,body').animate({
            scrollTop: s.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
</script>

</head>

<body>
<a name="top"></a>
  <header id="header">
    
      <div id="headerTop">
          <div class="wrapper">
              <div id="headerTopLeft">
          <span><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;+387 49 217 627</span>
          <span><i class="fa fa-lg fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;e-mail: office@dinamikturs.com</span>

                </div>

              <div id="headerTopRight">
              <?php

               if (isset($_SESSION['user'])) {
                
                    echo 'Admin:   <a class="gornjiMeni" href="admin-kuma/main.php">'.$_SESSION["user"].'</a>';
                 }
                ?>
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
                </div>
         
                <nav id="nav">
                
                  <ul> 
                    
                        <li><a href="#" class="dugme">NASLOVNA</a></li>
                        <li><a href="firstMinut.php" class="dugme">FIRST MINUTE</a></li>
                        <li><a href="lastMinut.php" class="dugme">LAST MINUTE</a></li>
                        <li><a href="#ljetovanja" class="dugme">LJETOVANJA</a></li>
                        <li><a href="jesen.php">JESEN</a></li>
                        <li><a href="ekskurzije.php">EKSKURZIJE</a></li>
                        <li><a href="#agencija" class="dugme">Agencija</a></li>
                      <li><a href="#">Avio karte</a></li>

                      <li><a href="kontakt.php">kontakt</a></li>
                     
                    </ul>
                    <a href="#" id="respmenu" class="button"><i class="fa fa-lg fa-navicon"></i>&nbsp;&nbsp;&nbsp;&nbsp;Navigacija</a>
                </nav>
            </div>
           
        </div>   
    
    </header><!-- kraj #header -->
    
    
    <article id="hero" class="negative">
         <!--------------------------------------------------------------------------------------------

        *                   SLAJDER BOOTSTRAP
       
        ***********************************************************************************************-->
        
        <div style="width:100%;" id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
         <?php
         // ovde izlistavam prvu sliku slajdera
         // zbog class item active ne mogu da je izlistam zajedno sa ostalim. pogledati jednostavnije resenje
          $firstSlider = Slider::get("id = 1");
          foreach ($firstSlider as $key => $first) {
            }  ?>
              <div class="item active">
                  <a href="<?=$firstSlider->url;?>"><img src="<?=$firstSlider->slika_slajder;?>" alt="autobusi" style="width:100%;"></a>
               </div>
            <?php   
           //
      
      
           $allSlider = Slider::direct_sql("select * from slider where id >1");
          foreach ($allSlider as $key => $otherSliderImg) {
           ?> 
               <div class="item">
                  <a href="<?=$otherSliderImg->url;?>"><img src="<?=$otherSliderImg->slika_slajder;?>" alt="Chicago" style="width:100%;"></a>
                </div>

            <?php
          }
 
        ?>
       
      <!-- 
        <div class="item">
            <a href="#"><img src="images/bigSlider/003.jpg" alt="New york" style="width:100%;"></a>
        </div>
        <div class="item">
            <a href="#"><img src="images/bigSlider/004.jpg" alt="New york" style="width:100%;"></a>
        </div>   
          -->
      </div><!-- carousel-inner -->


	    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
		    </a>
        </div> <!-- myCarousel -->

   
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
    </article><!-- hero - kontejner u kojem je smesten slider -->
     <!--------------------------------------------------------------------------------
                       KRAJ SLAJEDERA
 .............................................................................
        -->



    <div class="container" style="width:100%;">
     <section id="products">
      <div class="wrapper">
          
            <header id="#">
              <h2>IZDVAJAMO</h2>
               <br>
            </header>
            <?php
      
              $izdvajamoAll = Izdvajamo::get();
             
              foreach ($izdvajamoAll as $key => $izdvajamo) {
            
            ?>       
                 <!--****************************ovo je slika*******************************  -->
                  <div id=izdvajamo>
                     <div class ="col-md-6 izdvajamo">
                           <a href="<?=$izdvajamo->url;?>" data-rel="colorbox">
                                    <div  class="imgProduct"><img class="img-thumbnail img-responsive" src="<?= $izdvajamo->foto;?>" alt="Responsive image"></div>
                
                          </a>
                     </div><!-- md 6 class izdvajamo -->  

                     <?php
                     }
                     ?>

                  </div><!-- izdvajamo -->  
        </div>   <!-- .wrapper --> 
    </section>

    </div>

<!---------------------------------------------------------->



    <section id="products">
       <div class="wrapper">
          
            <header id="ljetovanja">
              <h2>Ljetovanje 2017</h2>
                <p></p>
            </header>


            <?php

          /*
              IZ Drzave Ljeto izlistavam sve drzave 
          */
                // OVDJE CE ICI DINAMIKA ZA IZLISTAVANJE drzaveLjeto

              $drzaveAll = DrzaveLjeto::get();
              foreach ($drzaveAll as $key => $drzava) {
             
           ?>
              <article class="product">
                 <a href="ljetovalista.php?drzava_id=<?=$drzava->id;?>"><h2><?=$drzava->naziv;?></h2>
                 
                   <img src="<?=$drzava->slika;?>"/>';
                  
                 <p></p>
                 <p class="button">Sve ponude &raquo;</p></a>
           </article>
           <?php
            }
            ?>

        <!--
            <article class="product">
               <a href="odmaralista.html"><h2>Turska</h2>
              <div  class="imgProduct"><img src="images/maleNajava/turska.jpg"></div>
                
                <p></p>
              <p class="button">Sve ponude &raquo;</p></a>
            </article>
            
            <article class="product">
              <h2>Crna Gora</h2>
              <div  class="imgProduct"><img src="images/maleNajava/crnagora.jpg"></div>
              
                <p></p>
              <p class="button">pogledaj vise &raquo;</p></a>
            </article>
            -->
        </div> <!-- wrapper -->

    </section>
    
    
    
    <article id="about" class="negative">
      <div class="wrapper" id="agencija">
        
          <div class="back">
                <h2>O Nama</h2>
                <h3>Turistička agencija Dinamik turs</h3>
                <p>Dinamik-turs je osnovan 1990. godine kao preduzeće za turizam, trgovinu i saobraćaj, te preregistrovan 2002. godine u Društvo sa ograničenom odgovornošću za turizam, trgovinu i saobraćaj.

				Za proteklih 20 godina urađeno je mnogo u cilju razvoja turističke djelatnosti i sticanja imidža savremene firme kroz kvalitetan rad i kvalitetno pružanje usluga korisnicima kao i u školovanju kadrova.

				Danas "Dinamik-turs" ima 3 agencije, u Brčkom, Bijeljini i Doboju, 10 zaposlenih školovanih radnika koji su osposobljeni za pružanje kompletnog turističkog servisa.
				</p>
                <p><a href="o_nama.php" class="button">Procitaj vise &raquo;</a></p>
          </div>
       
        </div>
    </article>
    
    
    <section id="partner">
        <div class="wrapper">
        
          <h2>Hot destinacije</h2>
            <p>Lorem ipsum dolor sit  amet, consectetur adipisicing elit. Quam, quidem, vitae veritatis distinctio qui amet eligendi ullam accusamus porro dignissimos dolores dolorem quibusdam nemo dolore quasi voluptates modi error laudantium voluptas beatae nulla ipsam repellat quaerat omnis harum expedita voluptatum accusantium voluptatibus soluta deleniti ipsa maxime ipsum delectus. Magnam natus id repellat saepe dignissimos fuga sint doloremque ad rem excepturi! Alias, laborum, officiis, excepturi incidunt amet quos natus odio aliquid ullam quam consectetur est nesciunt voluptatum officia quia! Reiciendis, perferendis, laudantium, corrupti soluta cupiditate impedit .</p>

             <div class="block" id="tags">
    
                    <ul>
                      <li><a href="#">Tajland</a></li>
                      <li><a href="#">Kuba</a></li>
                      <li><a href="#">Egipat</a></li>
                      <li><a href="#">Sejseli</a></li>
                      <li><a href="#">Brazil</a></li>
                      <li><a href="#">Mauricijus</a></li>
                      <li><a href="#">Havaji</a></li>
                      <li><a href="#">Pariz</a></li>
                      <li><a href="#">Dvorci Bavarske</a></li>
                      <li><a href="#">Rusija</a></li>
                      <li><a href="#">Dubai</a></li>
                      <li><a href="#">Tunis</a></li>
                      <li><a href="#">Malta</a></li>
                    </ul>
              </div><!-- block -->
      
        
            <div class="partners">
	              <div class="slide"><img src="images/littleslider/photo1.jpg"></div>
	              <div class="slide"><img src="images/littleslider/photo2.jpg"></div>
	              <div class="slide"><img src="images/littleslider/photo3.jpg"></div>
	              <div class="slide"><img src="images/littleslider/photo4.jpg"></div>
	              <div class="slide"><img src="images/littleslider/photo5.jpg"></div>
	           
            </div>
        </div>
        <div id="aviokarte" class="wrapper">
            <a href="#"><img src="images/aviokarte.jpg"></a>
        </div>
    </section>
    
   
</body>
</html>

    
<?php



include_once "includes/footer.php";




