<?php
session_start();
include('config.php');
   if(isset($_SESSION['admin_id'] ))
{ 
?>


<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Dashboard</title>            
        
       <?php
          include('template/header_css.php');
	   ?>                                
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
       
                 <?php
          include('template/sidebar_menu.php');
	   ?>   
	   
		  <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
				 <?php
          include('template/header.php');
	   ?>   
	   
                                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default ">
                                
                                    <div>                                    
                                        <div class="widget-title"><br/><br/>Welcome to Dashboard</div>                                                                        
                                
                                    </div>
                                                                                          
                                                          
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                       
					   </div>
                    <!-- END WIDGETS -->                    
                                       
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

       
              <?php
		                  	   
				include('template/logout_load.php');
			    include('template/footer_js.php');
			  
			  ?>
    </body>
</html>

<?php
}
else {
	
	      header('location:login.php'); 
}

?>




