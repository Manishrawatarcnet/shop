<?php
session_start();
include('config.php');
   if(isset($_SESSION['admin_id'] ))
{ 
 
 $catid = $_GET['catid'];
 
$q = " select * from category where id ='$catid' ";
$qry = $con->query($q);

$row = $qry->fetch_array();

if(isset($_POST['update'])) 
         {
			 
			   $category = $_POST['category'];	   
			   $qupd = "update category set name = '$category' where id= '$catid' ";
			   $qry2 = $con->query($qupd);
			   if($qry2==TRUE)
			     {
					 header("location:view_category.php");
					 
				 }
			   
			   else
			     {
					 echo "error".mysqli_error($con);
				 }
		 }
 
 
  

?>


<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Add category</title>            
        
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
                    <li class="active">Add category</li>
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
                                    <h3 class="panel-title"><strong>Add category</strong> </h3>
									<ul class="panel-controls">
                                        <li><a href="View_category.php" class="link-area">View Category</a></li>
										<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        
                                    </ul> 
                                   
                                </div>
                                
                                <div class="panel-body">      
								
								  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Category Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
                                                <input type="text" class="form-control" name="category" value="<?php echo $row[1]; ?>" placeholder="Enter category Name" required  />
                                            </div>                                             
                                            
                                        </div>
                                    </div>
                                    
                                 
                                <div class="panel-footer">
                                 
                                    <button class="btn btn-primary pull-right" name="update">Submit</button>
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




