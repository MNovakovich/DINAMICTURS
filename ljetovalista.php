<?php
/*
  STRANICA U KOJOJ SU PRIKAZANA LJETOVALISTA KADA ODABEREMO DRZAVU.
   iz klase DrzavaLjeto 
*/
session_start();
require_once "includes/header.php";
include_once "config.php";


//ISPITUJEM DA LI JE POSLAT ID GET-OM SA STRANICE drzaveLjeto
if (!isset($_GET['drzava_id'])) {
  // ovde bih trbao da uhvatim gresku pomocu pdoExceptiona
     header("location: index.php");

}
 
   $ljetovaliste_id = $_GET['drzava_id'];

?>
    
    <section id="central">
    	<div class="wrapper">
          <div class="row">
             <div class="col-md-12 mainBar">
           <?php

          $ljetovaliste_id = $_GET['drzava_id']; 
            //ISPITUJEM DA LI JE POSLAT ID GET-OM SA STRANICE drzaveLjeto
            if (!isset($_GET['drzava_id'])) {
              // ovde bih trbao da uhvatim gresku pomocu pdoExceptiona
             
            }
            
/***********************************************************************************************************/     
              // NA STRANICI U NASLOVU ISPISUJE NAZIV DRZAVE KOJOJ PRIPADAJU LETOVANJA
/***********************************************************************************************************/ 
             
             $drzavaNaslov = DrzaveLjeto::get("id = $ljetovaliste_id");
                foreach ($drzavaNaslov as $key => $item)
                 {
              
                 }
                  
                
/**********************************************************************************************************/
                    //  u zavisnosti od izabrane drzave, biram ljetovalista koja se u njoj nalaze. 
/***********************************************************************************************************/
                   
               $ljetoView = Ponuda::getLjetovalista($ljetovaliste_id);

                    foreach ($ljetoView as $key => $item) {
                       
                  ?>

                <ul class="ace-thumbnails regija">  
                      <li class="regijaItem">
                           <a href="hoteliLista.php?aranzman_id=<?=$item->aranzman_id;?>&ponuda_id=<?=$item->id;?>" data-rel="colorbox">

                                    <h2><?=$item->naslov;?></h2>
                                    <div  class="imgProduct"> 
                                  
                                    <img src="<?=$item->slika;?>"/>
                                  
                                    </div>
                                 
                                <div class="text">

                          
                                  </div>
                          </a>
                      </li>
                    </ul>
              <?php
                   }
                ?>
              </div><!-- md 8 -->
                

          </div><!-- row -->
          
        
       </div><!-- .wrapper   -->
    </section>
    
    
 

<?php
require_once "includes/footer.php";
