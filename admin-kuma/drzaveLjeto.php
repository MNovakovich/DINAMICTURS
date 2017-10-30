<?php
session_start();
if ( $_SESSION['user'] == "") {
	 header("location: index.php");
}
include "../config.php";
include_once "includes/heder.php";


?>

	<script>
											function izlistaj(str) {
											  if (str=="") {
											    document.getElementById("txtHint").innerHTML="";
											    return;
											  } 
											  if (window.XMLHttpRequest) {
											    // code for IE7+, Firefox, Chrome, Opera, Safari
											    xmlhttp=new XMLHttpRequest();
											  } else { // code for IE6, IE5
											    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
											  }
											  xmlhttp.onreadystatechange=function() {
											    if (this.readyState==4 && this.status==200) {
											      document.getElementById("txtHint").innerHTML=this.responseText;
											    }
											  }
											  xmlhttp.open("GET","getuser.php?q="+str,true);
											  xmlhttp.send();
											}
											</script>
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Ljetovanja
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i><br>
									ODABERI ZEMLJU<form>
										           <select name="users" onchange="showUser(this.value)">
											          <option value="">Selectuj drzavu:</option>
											    <?php

											   $option = DrzaveLjeto::get();
											   foreach ($option as $key => $drzava)
											   {
											    echo "<option value='{$drzava->id}'>{$drzava->naziv}</option>";
											   }
											  ?>
											  
										  </select>
									</form>


									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-7">
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<ul class="ace-thumbnails clearfix">
										
                                      
										<!--****************************ovo je slika*******************************  -->
								


								    <div id="txtHint"></div><!-- txtHin -->
										<li>
											<a href="assets/images/gallery/image-3.jpg" data-rel="colorbox">

												<h2>Grcka</h2>
                                                   <div  class="imgProduct"><img src="../images/maleNajava/grcka.jpg"></div>
												<div class="text">

											
												</div>
											</a>

											<div class="tools tools-bottom">
							

												<a href="#">
													<i class="ace-icon fa fa-pencil"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-times red"></i>
												</a>
											</div>
										</li>
          <!--*******************************************ovo je slika*******************************  -->
								
										
									</ul>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col  md 7-->
	<!-- ****************************************************************************************************** -->


							<!-- FORMA  ZA UNOS DRZAVE -->
						        

						        <?php

						          // uneta forma za novu drzavuLjeto
                                  require "includes/formaUnosDrzave.php";
                                   
						        ?>
	<!-- ******************************************************************************************************** -->
						</div><!-- /.row -->


					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php
			require "includes/footer.php";