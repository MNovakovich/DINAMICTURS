<?php
require "config.php";
require "includes/header.php";  

?>
    
    
    <section id="central">
    
    
    	<div class="wrapper">
          <h5>Dinamik turs</h5>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 44.8761952 , lng: 18.8101946}

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2yYUbAtYydSmrCEpe4C_3lMKkbzGs1yU&callback=initMap">
    </script>
        <div class="row">
          <div class="col-md-6">
          <h2>Kontaktirajte nas</h2>
                  <form>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email adresa</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Naslov poruke</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="naslov poruke">
                          </div>
                         

                          <textarea class="form-control" rows="4"></textarea>
                         
                          <button type="submit" class="btn btn-default">posalji</button>
                        </form>
          </div> <!--col md 6-->

          <div class="col-md-6">
              	<main id="mainFull">

                  	
                      
                   
                      
                      <div class="contactInfo">
                          <p><i class="fa fa-2x fa-phone"></i> +387 49 217 627</p>
                          <p><i class="fa fa-2x fa-envelope"></i>office@dinamikturs.com</p>
                          <p><i class="fa fa-2x fa-globe"></i>www.dinamikturs.com</p>
                          <p><i class="fa fa-2x fa-home"></i> Bosne Srebrene 24, Brčko 76100, Republika Srpska</p>
                      </div>
                      
                </main>
            </div><!--col md 6 desni-->   
           </div> <!--row-->     
        </div>
    </section>
    
    
    
<?php

require "includes/footer.php";






























