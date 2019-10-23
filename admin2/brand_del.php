<?php
session_start();
include('config.php');
   if(isset($_SESSION['admin_id'] ))
{ 
 
 
$brand_del =   $_GET['branddelid'];

$q= "delete from brand where id = '$brand_del' ";

$qry = $con->query($q);

if($qry==TRUE){ 
                    $_SESSION['cdelmessage'] = 'Data Deleted successfully';
                    header('location:view_brand.php?Successfully-delete=');
					exit();
}

else{
        echo "Erorr".mysqli_error($con);
}

 
  

?>


<?php
}
else {
	
	      header('location:login.php'); 
}

?>




