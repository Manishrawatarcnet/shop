<?php
session_start();
include('config.php');
include('function/class-function.php');
   if(isset($_SESSION['admin_id'] ))
{ 
 
     
   $q = "select * from products";
   $qry = $con->query($q);



?>


<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>View Sub Category</title>            
        
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
                    <li><a href="index.php">Home</a></li>                    
                    <li class="active">View Products</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                     <div class="row">
                        <div class="col-md-12">
                            
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>View Products</strong> </h3>
									
									<ul class="panel-controls">
                                        <li><a href="add_products.php" class="link-area">Add Products</a></li>
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
                                                <th>Product Name</th>
												<th> Prod Cat Name</th>
												<th> Prod SubCat Name</th>
												<th> Brand Name</th>
												<th> Price</th>
												<th> Qty.</th>
												<th> Image</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										
										<?php
										$x=1;
										while( $row = $qry->fetch_array())
											
											{
												
												   $q2 = "select * from category  where id = '$row[2]' ";
                                                   $qry2 = $con->query($q2);
												   $row2 = $qry2->fetch_array();
												   $q3 = "select * from subcategory  where id = '$row[3]' ";
                                                   $qry3 = $con->query($q3);
												   $row3 = $qry3->fetch_array();
												   $q4 = "select * from brand  where id = '$row[4]' ";
                                                   $qry4 = $con->query($q4);
												   $row4 = $qry4->fetch_array();

												
												
										
										?>
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $row[1]; ?></td>
												<td><?php echo $row2[1]; ?></td>
												<td><?php echo $row3[2]; ?></td>
												<td><?php echo $row4[1]; ?></td>
												<td><?php echo $row[5]; ?></td>
												<td><?php echo $row[7]; ?></td>
												<td><img src="img/products/<?php echo $row[8]; ?>" style="width:40px;height:40px;" alt="" /> </td>
                                                <td>
												  <button class="btn btn-default btn-rounded btn-sm" onclick="window.location.href='edit_products.php?prodcatid=<?php echo $row[0];  ?>'">
												   <span class="fa fa-pencil"></span>
												  </button>
												  
												  <button type="button" class="btn btn-danger btn-rounded btn-sm" onclick="window.location.href='subcategory_del.php?subcatdelid=<?php echo $row[0];  ?>'">
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




