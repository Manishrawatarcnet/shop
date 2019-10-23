<?php
session_start();
include('config.php');
include('function/class-function.php');
   if(isset($_SESSION['admin_id'] ))
{ 
 
     
   $q = "select * from brand ORDER By name";
   $qry = $con->query($q);



?>


<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>View Brand</title>            
        
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
                    <li class="active">View Brand</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                     <div class="row">
                        <div class="col-md-12">
                            
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>View Brand</strong> </h3>
									
									<ul class="panel-controls">
                                        <li><a href="add_brand.php" class="link-area">Add Brand</a></li>
										<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        
                                    </ul>  
                                   
                                </div>
                                
                                <div class="panel-body">      
								 
								  <?php 
					  $classmsg = new messagesuc;
					  $classmsg->sucdel();		
								
								
								?>		
								 
                                     <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										
										<?php
										$x=1;
										while( $row = $qry->fetch_array())
											
											{
										
										?>
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $row[1]; ?></td>
                                                <td>
												  <button class="btn btn-default btn-rounded btn-sm" onclick="window.location.href='edit_brand.php?brandid=<?php echo $row[0];  ?>'">
												   <span class="fa fa-pencil"></span>
												  </button>
												  
												  <button type="button" class="btn btn-danger btn-rounded btn-sm" onclick="window.location.href='brand_del.php?branddelid=<?php echo $row[0];  ?>'">
												  <span class="fa fa-times"></span>
												  </button>
												  
												</td>
												
                                                
                                            </tr>
                                        <?php  
										    $x++;
											}
											
											
											
											
											
										?>  
                                        </tbody>
                                    </table>
                              
                                    
                                 
                                
                            </div>
                           
                            
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




