<?php
session_start();
if ( $_SESSION['user'] == "") {
	 header("location: index.php");
}
require_once "../config.php";
require_once "includes/heder.php";


?>

			

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								HALKIDIKI
								<small>
									<i style="padding-bottom: 10px;" class="ace-icon fa fa-angle-double-right"></i><br>
								
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<ul class="ace-thumbnails clearfix">
										

										
                                          <!--****************************ovo je slika*******************************  -->
										<li style="width: 400px;" class="listaHoteli">
											<a href="#" data-rel="colorbox">

												<h2 style="position: absolute;">Vila Vengis Hot</br> dfghfdhponuda</h2>
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
											
										<!--****************************ovo je slika*******************************  -->
												<li style="width: 400px;" class="listaHoteli">
											<a href="#" data-rel="colorbox">

												<h2 style="position: absolute;">Vila Vengis Hot ponuda</h2>
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
											
										<!--****************************ovo je slika*******************************  -->
												<li style="width: 400px;" class="listaHoteli">
											<a href="#" data-rel="colorbox">

												<h2 style="position: absolute;">Vila Vengis Hot ponuda</h2>
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
											
										<!--****************************ovo je slika*******************************  -->

										
									</ul>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							<!-- ***************************************************************************** -->


							<!-- FORMA -->
							\

							<!-- ***************************************************************************** -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		<?php
			require "includes/footer.php";