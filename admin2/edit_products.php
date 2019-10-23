<?php
session_start();
include('config.php');
   if(isset($_SESSION['admin_id'] ))
{ 
 
 $prodcatid = $_GET['prodcatid'];
 
$q = " select * from products where id ='$prodcatid' ";
$qry = $con->query($q);
$row = $qry->fetch_array();
$old_img=$row[8] ;



 $q3 = "select * from category   ";
 $qry3 = $con->query($q3);
 
  $q4 = "select * from subcategory   ";
 $qry4 = $con->query($q4);
 
  $q5 = "select * from brand   ";
 $qry5 = $con->query($q5);
 



if(isset($_POST['update'])) 
         {
			 
			   $p_name = $_POST['p_name'];
	           $p_category = $_POST['p_category'];
                if($_POST['p_subcategory']=='nullvalue')
		{
			$_POST['p_subcategory']=NULL ;
			
		}			   
			   $p_subcategory = $_POST['p_subcategory'];
	   $p_brand = $_POST['p_brand'];
	   $p_price = $_POST['p_price'];
	   $p_description = $_POST['p_description'];
	   $p_quantity = $_POST['p_quantity'];
	   $pimage = $_FILES['pimage']['name'];
	   move_uploaded_file($_FILES['pimage']['tmp_name'],'img/products/'.$pimage);
	  
	    if($pimage=='')
             {
              $pimage=$old_img;
                }
	   
			 echo  $qupd = "update products set p_name = '$p_name' , p_category = '$p_category' , p_subcategory ='$p_subcategory', p_brand = '$p_brand', p_price = '$p_price', p_description = '$p_description', p_qty = '$p_quantity', p_img = '$pimage' where id= '$prodcatid' ";
			   $qry2 = $con->query($qupd);
			   if($qry2==TRUE)
			     {
					header("location:view_products.php");
					 
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
        <title>Edit Sub Category</title>            
        
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
                    <li class="active">Edit Products</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                     <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit Products</strong> </h3>
									<ul class="panel-controls">
                                        <li><a href="view_products.php" class="link-area">View Products</a></li>
										<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        
                                    </ul> 
                                   
                                </div>
                                
                                <div class="panel-body">      
								
								  
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Product Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
                                                <input type="text" class="form-control" name="p_name" value="<?php echo $row[1]; ?>" placeholder="Enter category Name" required  />
                                            </div>                                             
                                            
                                        </div>
                                    </div>
                                    
									 <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Select Product Category</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="p_category" required>
                                                <option>Choose category</option>
											<?php 
											  while($row3 = $qry3->fetch_array())
											  {
											?>	
                                                <option <?php if ($row3[0] == $row[2] ) echo 'selected' ; ?> value="<?php echo $row3[0]; ?>">
												<?php echo $row3[1]; ?></option>
                                                
												
										    <?php 
											  }
											?>		
											
                                            </select>
                                            
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Select Product Sub Category</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="p_subcategory" required>
                                                <option>Choose category</option>
												<?php 
												
												  $nullvalue = 'nullvalue';
												
												?>
												<option value="<?php echo $nullvalue; ?>">No Sub category</option>
											<?php 
											  while($row4 = $qry4->fetch_array())
											  {
											?>	

                                                <option <?php if ($row4[0] == $row[3] ) echo 'selected' ; ?> value="<?php echo $row4[0]; ?>"><?php echo $row4[2]; ?></option>
                                                
												
										    <?php 
											  }
											?>		
											
                                            </select>
                                            
                                        </div>
                                    </div>
									
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Select Product Brand</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="p_brand" required>
                                                <option>Choose category</option>
											<?php 
											  while($row5 = $qry5->fetch_array())
											  {
											?>	
                                                <option <?php if ($row5[0] == $row[4] ) echo 'selected' ; ?> value="<?php echo $row5[0]; ?>"><?php echo $row5[1]; ?></option>
                                                
												
										    <?php 
											  }
											?>		
											
                                            </select>
                                            
                                        </div>
                                    </div>
									
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Product Price</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
                                                <input type="text" class="form-control" name="p_price" value="<?php echo $row[5]; ?>" placeholder="Enter category Name" required  />
                                            </div>                                             
                                            
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Product Description</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
												<textarea class="form-control" name="p_description" rows="5" required><?php echo $row[6]; ?></textarea>
                                                
                                            </div>                                            
                                            
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Quantity Available</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"></span>
                                                <input type="text" class="form-control" name="p_quantity" value="<?php echo $row[7]; ?>" placeholder="Enter Quantity" required  />
                                            </div>                                           
                                         </div>
										 
										 
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Product Image</label>
                                        <div class="col-md-6 col-xs-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="pimage" id="filename" title="Browse file"/>
                                            <span class="help-block">Input type file</span>
                                        </div>
										 <div class="col-md-3 col-xs-12"> 
										old Image  <img src="img/products/<?php echo $row[8]; ?>" style="width:40px;height:40px;" alt="" />
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




