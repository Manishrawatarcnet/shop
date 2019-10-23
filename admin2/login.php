<?php
session_start();
include('config.php');
if(isset($_POST['submit']))
{ 

 $adm_email = $_POST['email'];
 $adm_password = $_POST['password'];
 $admlog="select * from super_admin where admin_id = '$adm_email' and password = '$adm_password' ";
  $qry=$con->query($admlog);
  $admrow=$qry->fetch_array();
    if($admrow==TRUE)
				              {
							    $_SESSION['admin_id'] = $admrow['id'];
								header('location:index.php');
								
							  
							  }
							  
	                else { 
					$errormsg = 'Incoorect email or password';
					}
							  


}
 

?>

<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Login</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div class="login-title text-center logo_login"><strong>Grocery</strong> Store</div>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>
                    <form action="" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="email" placeholder="E-mail" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Password" required />
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-md-12">
                            <button class="btn btn-info btn-block" name="submit">Log In</button>
							<?php if (isset($errormsg)) { echo $errormsg; } ?>
                        </div>
                    </div>
                    
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2019 Grocery Store
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </body>
</html>






