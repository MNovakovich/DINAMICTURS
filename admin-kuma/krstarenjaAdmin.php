<?php
session_start();
if ( $_SESSION['user'] == "") {
	 header("location: index.php");
}
include "../config.php";
include_once "includes/heder.php";


?>
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->
                       <script>
							function showUser(str) {
							    if (str == "") {
							        document.getElementById("txtHint").innerHTML = "";
							        return;
							    } else { 
							        if (window.XMLHttpRequest) {
							            // code for IE7+, Firefox, Chrome, Opera, Safari
							            xmlhttp = new XMLHttpRequest();
							        } else {
							            // code for IE6, IE5
							            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
							        }
							        xmlhttp.onreadystatechange = function() {
							            if (this.readyState == 4 && this.status == 200) {
							                document.getElementById("txtHint").innerHTML = this.responseText;
							            }
							        };
							        xmlhttp.open("GET","getuser.php?q="+str,true);
							        xmlhttp.send();
							    }
							}
						</script>
						<div class="page-header">
							<h1>
								Krstarenja
								 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i><br>
                        

								

									<?php
                                     // print_r($_GET);
									?>
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div class="row">
								<div class="col-xs-7">
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<ul class="ace-thumbnails clearfix">
								
							<!--****************************ovo je slika*******************************  -->
								
                             <?php

                              // OVDJE SE UCITAVA SLICICE ODMARALISTA PREKO AJAKSA IZ FAJAL IZ KLASE PONUDA, METODA ljetoPrikaz
                             ?>

          
								<div id="txtHint"><b>Lista ljetovalista...</b></div>

										
									</ul>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col  md 7-->

							<!-- FORMA  ZA UNOS DRZAVE -->
						        
                               
						        <?php

						          // uneta forma za novu drzavuLjeto
                                  require "includes/formaUnosLjetovanja.php";
                                   
						        ?>
	<!-- ******************************************************************************************************** -->
						</div><!-- /.row -->


					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php
			require "includes/footer.php";