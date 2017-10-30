<?php
require_once "config.php";
require_once "includes/header.php";

//print_r(dirname(__FILE__));

    ?>
 
<div class="container" style="width:100%;">

      

    <section id="products">
      <div class="wrapper">
          
            <header id="ljetovanja">
              <h2>Ljetovanje 2017</h2>
                <p></p>
            </header>


            <?php

          /********************************************************
              IZ Drzave Ljeto izlistavam sve drzave 
          ***************************************************/
         
          
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

        </div>    
    </section>
    
    
    
    
    
    
    <section id="partner">
      <div class="wrapper">
        
          <h2>Hot destinacije</h2>
            <p>OVDE DODATI NEKI TEKST !!!</p>

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
                      </div>
           </div><!--block2 of sidebar end-->
        
          
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























