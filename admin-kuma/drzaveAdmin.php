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

						<div class="page-header">
							<h1>
								Drzave
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
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

                                       
                                         



										?>
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
