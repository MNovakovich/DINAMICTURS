<?php
session_start();

/*
  NA OVOJ STRANICI SE UCITAVAJU SAMO NAZIV, TEKST SLIKA, SLIKA IZ TABELE HOTEL, NAKON CEGA 
  SE REDIREKTURJ NA STRANU hotel.php, GDE CE BITI SMESTENE SVE INFORMACIJE O ODABRANOM HOTELU
*/
require_once "includes/header.php";
require_once "config.php";

?>
    
    <section id="central">
    	<div class="wrapper">
        
        <!-- oVDE TREBA DA DODJE NASLOV -->
        	<main id="mainFull">
              <div class="row">
                  <div class="col-md-12">

                     

                       <p>&nbsp;</p>
                  </div><!--col md 12-->
                
              </div> <!--row-->

             <div class="row">
             <?php
             // dodajemo naslov na stranici
         
          
            echo"<h1>Ekskurzije</h1>";
             
             ?>
                  <div class="col-md-9 col-sm-8 col-xs-8">
          <?php
      
        $hotelLista = Hotel::direct_sql("SELECT hotel.hotel_naziv, hotel.hitCena, hotel.tekst_naslovna, hotel.foto_1 FROM `hotel` 
                                         inner JOIN ponuda
                                         on hotel.ponuda_id = ponuda.id
                                         inner JOIN aranzman
                                         on aranzman.id = ponuda.aranzman_id
                                         where aranzman.id = 7 order BY hotel.id DESC");
         foreach ($hotelLista as $key => $value) {

              if ($value->hotel_naziv == "") {
                    echo "<h2 style='color:red;'>Zao nam je, trenutno nemamo trazenu ponudu</h2>";
                die();
              }else
 
             ?>
              
                       <article class="article hoteliLista">
                          <div class="slikaHoteli">
                                <a  href="hotel.php?hotel_id=<?=$value->id;?>" class="articleImg">
                                  
                                 <img src="<?=$value->foto_1;?>"/>
                                  
                          </div> <!--.slikaHoteli-->


                          <div class="tekstHoteli">  
                            <header>

                              <h2><a  href="hotel.php?hotel_id=<?=$value->id;?>" ><?=$value->hotel_naziv;?></a></h2>
                                <p>Vec od <b><?=$value->hitCena;?></b> km</p>
                            </header>
                            
                              <p> <?=$value->tekst_naslovna;?></p>
                             <p><a href="hotel.php?hotel_id=<?=$value->id;?>" class="button">Procitaj vise &raquo;</a></p>
                          </div> <!--tekstHoteli-->
                        </article>
           
                     <?php
                 }
                     ?>
                     </div><!--col md 9-->

                     <?php
                     //  ovde planiram da dodje spisak svih ljeovalista
                     ?>
                     <div class="col-md-3 col-sm-4 col-xs-4" id="mainHoteli">
                       
                        <?php require_once "includes/rightSideBar.php"; ?>
                      
                     </div>  
                      </div><!--row-->

            </main>
        
            
        </div><!-- wrapper -->
    </section>
    
    
   <?php
   require_once "includes/footer.php";

















