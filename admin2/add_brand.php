<?php
session_start();
include('config.php');
   if(isset($_SESSION['admin_id'] ))
{ 
 
   if(isset($_POST['submit']))
   {
      $brand = $_POST['brand'];	   
      $qins = "insert into brand values ('','$brand' )";	  
	  
	  $qry = $con->query($qins);
	   	
	  
	  if($qry==TRUE)
				{
					
					$succadd = "Successfully Added";
					
				}
				   
				   else {
					   
					   echo "error" .mysqli_error($con);
				   }
			   
	  
	  
	  
   }	   
   



?>


<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Add Brand</title>            
        
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
                    <li class="active">Add Brand</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                     <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add Brand</strong> </h3>
									<ul class="panel-controls">
                                        <li><a href="View_brand.php" class="link-area">View Brand</a></li>
										<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        
                                    </ul> 
                                   
                                </div>
                                
                                <div class="panel-body">      
								
								  <div class="col-md-12 text-center">
								    <div class="succes_msg">

                                    <?php 
									
									 if(isset($succadd))
									 {
										 echo $succadd;
									 }

     
                                    ?>	
                                         </div>
                                    </div>									
                                    <br/><br/>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Brand Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
                                                <input type="text" class="form-control" name="brand" placeholder="Enter brand Name" required  />
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                    
                                 
                                <div class="panel-footer">
                                 
                                    <button class="btn btn-primary pull-right" name="submit">Submit</button>
                                </div>
                            </div>
                            </form>
                            
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




