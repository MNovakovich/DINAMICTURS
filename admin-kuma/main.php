<?php
session_start();
if ( $_SESSION['user'] == "") {
	 header("location: index.php");
}
require_once "../config.php";
require "includes/heder.php";
//session_start();

?>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

					
							
											
										<!--****************************ovo je slika*******************************  -->

										
									</ul>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							<!-- ***************************************************************************** -->


							                        <!-- FORMA -->
							

                                   <?php
                                

		                       
                                   ?>
 


							<!-- ***************************************************************************** -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		<?php
			require "includes/footer.php";