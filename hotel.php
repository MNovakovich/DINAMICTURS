<?php
/*
* SASTRANICE hoteliLista.php nas prebacuje na ovu stranu
* klasa  za izlistavanje Hotel.php
*/
require_once "includes/header.php";
include_once "config.php";

 echo $hotel_id = $_GET['hotel_id'];

   
if (!isset($hotel_id))
   {  
   // header mi ne funkcionise
     echo "nemamo zeljeni hotel";    
   } 
    // glavni upit za izlistavanje hotela i za naslo
?>
    
    
    <section id="central">
    	<div class="wrapper">

        <div class="row">
            <div class="col-md-8 col-sm-8">
            	<main id="mainFull">
                   <article class="article" class="hotels" >
                          <div  class="hotelText"> 
                          
                       <?php    
                        $hotel = Hotel::get("id = $hotel_id");
                         
                        
                        // print_r($hotelLista);
                        
                          if ($hotel == "" ) {

                           echo "<h2 style='color:red;'>Zao nam je, trenutno nemamo trazenu ponudu</h2>";
                               die();
                            }else

                         ?>          
                               <header >
                                  <h2><a href="#"><?=$hotel->hotel_naziv;?></a></h2>
                               </header>

                            
                            
                            <p><?=$hotel->informacije;?></p>
                            </p>
                         </div><!--kraj hotelText-->
                         

                        <div class="hotelImages">
                            <div class="row">
                                <div  class="velikaSlika" >
                                   <?php
                                    
     /*************************************************************************************************
                             FOTOGRAFIJE
     ***********************************************************************************************/                           
                  // NASLOVNA FOTOGRAVIJA
                             ?>>
                            <a style="width:120%; float:left;" class="example-image-link articleImg" href="<?=$hotel->foto_1;?> " data-lightbox="example-set" data-title=""><img style="width:85%;" class="example-image" src="<?=$hotel->foto_1;?>" alt=""/></a>

                            </div><!--kraj md 12-->
                            <div  class="maleSlicice">
                            <a class="example-image-link articleImg" href="<?=$hotel->foto_2;?>" data-lightbox="example-set" data-title=""><img class="example-image" src="<?=$hotel->foto_2;?>" alt=""/></a>
                            <a class="example-image-link articleImg" href="<?=$hotel->foto_3;?>" data-lightbox="example-set" data-title=""><img class="example-image" src="<?=$hotel->foto_3;?>" alt=""/></a>
                            <a class="example-image-link articleImg" href="<?=$hotel->foto_4;?>" data-lightbox="example-set" data-title=""><img class="example-image" src="<?=$hotel->foto_4;?>" alt=""/></a>
                            <a class="example-image-link articleImg" href="<?=$hotel->foto_5;?>" data-lightbox="example-set" data-title=""><img class="example-image" src="<?=$hotel->foto_5;?>" alt=""/></a>
                            <a class="example-image-link articleImg" href="<?=$hotel->foto_6;?>" data-lightbox="example-set" data-title=""><img class="example-image" src="<?=$hotel->foto_6;?>" alt=""/></a>
                            <a class="example-image-link articleImg" href="<?=$hotel->foto_7;?>" data-lightbox="example-set" data-title=""><img class="example-image" src="<?=$hotel->foto_7  ;?>" alt=""/></a>
  

  
                                                  
                               </div><!-- velikaSlika -->
                            
                         </div> <!--kraj hotelImages-->

                           <div class="tabovi">
                                      
                                <a href="#btn">
                                   <div id="btn" class="tab">
                                      <span>-</span>
                                       <b>CENOVNIK</b>
                                     </div> 
                                </a>
                                    <div id="otvori" class="tab-close tab-open">
                                   <div class="sadrzaj">
                      <?php

/**********************************************************************************************************
                                   CENOVNIK iz tabele hotel, kolona cenovnik info
**********************************************************************************************************/                      
                               echo '<p>'.$hotel->cenovnik_info.'</p>';
                                 ?>
                              <img style="width: 100%;" src="<?=$hotel->cenovnikPDF;?>" >

                     
                                 </div>

                            </div><!--tab clos tab open-->

                             </div><!--kraj tabova-->



                           <div class="tabovi">

                                       <a href="#btn1"><div id="btn1" class="tab">
                                             <span>-</span>
                                             <b>Program putovanja</b>
                                       </div> </a>
                                       <div id="otvori1" class="tab-close tab-open">
                                       <div class="sadrzaj">
                                       
<?php
/**********************************************************************************************************
                                   PROGRAM PUTOVANJA iz tabele hotel, kolona plan_putovanja 
**********************************************************************************************************/                    

                          echo "<p>".$hotel->plan_putovanja."</p>";
?>
                      </div>

                                       </div><!--tab clos tab open-->

                             </div><!--kraj tabova-->
                       
                  </article>


                <!--
*********************** OVDE POCINJE DESNI BANER PANO***************************************************
                -->
             </div> <!--kraj md 8-->


             <div class="col-md-4">
                    <div id="tagoviMenu"> </div>
                            <?php
                      $mainBar  = Ponuda::direct_sql("select ponuda.id as id, ponuda.naslov , ponuda.slika,
                                                      ponuda.video_link as video ,ponuda.aranzman_id 
                      	                              from ponuda 
                      	                              inner join aranzman
                      	                              on ponuda.aranzman_id = aranzman.id 
                      	                              inner join hotel on ponuda.id = hotel.ponuda_id 
                      	                              where ponuda.`aranzman_id`  = 2 || 
                      	                              ponuda.`aranzman_id`= 7   || 
                      	                              ponuda.`aranzman_id` = 8  ||
                      	                              hotel.last_minut = 1 || 
                      	                              hotel.first_minut = 1
                      	                              order by rand() limit 3
");

                    foreach ($mainBar as $key => $item) {
                        $url =$item->video;
              
                  /*  echo  '<iframe width="300" height="220" src="<?=$url;?>" frameborder="0" allowfullscreen></iframe>'; */
                  ?>
                  <ul   class="ace-thumbnails regija">  
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

            </div><!--kraj col-md 4-->
                    	
                 
         </div> <!--kraj rova-->
           
           	
            </main>
        
          
        </div>
    </section>
    
    
<?php
 


require_once "includes/footer.php";






      











