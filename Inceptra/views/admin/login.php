<!DOCTYPE html>
<html>
<head>
<title> Finding Nemo AdminLogin </title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS style files -->
			<link href="<?php echo $base;?>/admin_assets/css/bootstrap.min.css" rel="stylesheet">

		<link href="<?php echo $base;?>/admin_assets/css/default1.css" rel="stylesheet">
		<script src="<?php echo $base;?>/admin_assets/js/jquery-1.10.2.min.js"></script>
		<script src="<?php echo $base;?>/admin_assets/js/bootstrap.min.js"></script>  
</div>
</head>
<body id="loginbg" class="loginpage"> 
 
<!-- Start: login-holder -->
<div class="container" style="width:100% !important;" >
	
		<div class="logindiv">
				<div id="loginbox"><br>
              
                
	<!--  start login-inner -->
				<center>
				<form name="login" action="<?php echo site_url('admin/admin/login');?>" method="post" class="loginform">
				
				<div class="col-md8 lgmid">
				<div class="error"><?php echo $error;?></div>
                <br>
                
                <div class="form-group">
   
    <input type="text" class="form-control textbox" id="" name="username" placeholder="Enter The Username">
  </div>
				<div class="form-group">
    
    <input type="password" name="password"  class="form-control textbox" id="" placeholder="Enter The Password">
  </div>	
				<br>		
                        
                        
						
					
					<div style="align:center;"><input type="submit" class="submit-login loginbtn btn btn-primary"  value="Login" /></div>
				</div>
				
				




					</form></center>
                    
                    
                    
                    
                    
                    
                    
                    
				</div>
				</div>
		</div>

</div>

<!-- End: login-holder -->
</body></html>
