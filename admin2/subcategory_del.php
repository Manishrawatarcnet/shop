<?php
session_start();
include('config.php');
   if(isset($_SESSION['admin_id'] ))
{ 
 
 
$subcatdelid =   $_GET['subcatdelid'];

$q= "delete from subcategory where id = '$subcatdelid' ";

$qry = $con->query($q);

if($qry==TRUE){ 
                    $_SESSION['cdelmessage'] = 'Data Deleted successfully';
                    header('location:view_subcategory.php?Successfully-delete=');
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




