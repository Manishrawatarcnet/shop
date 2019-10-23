<?php
session_start();
include('config.php');
   if(isset($_SESSION['admin_id'] ))
{ 
 
 
$catdelid =   $_GET['catdelid'];

$q= "delete from category where id = '$catdelid' ";

$qry = $con->query($q);

if($qry==TRUE){ 
                    // $_SESSION['cdelmessage'] = 'Data Deleted successfully';
                    header('location:view_category.php?Successfully-delete=');
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




