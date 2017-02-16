<?php
#*******************************************************************************************************************#
# 					\-\-\-\-\-\-\-\-\-\-\-\	https://www.BandGmatrimony.com	/-/-/-/-/-/-/-/-/-/-/-/					#
#*******************************************************************************************************************#
# B&Gmatrimony		:	Version 1.0                                                                 				#
# Authors			:	Asha K Mohanan                         				#
# Created 			:	01/10/2014				Last Modified 20/04/1013                            				#
# License:      	:   http://www.ASoftTechnologies.com                                            				#
#*******************************************************************************************************************#
# File name     	:          login.php                                                             				#		
# File purpose  	:          Form for login to Admin Area                                          				#
#                                                			                                                        #
#Included Files		:			 												                                    #
#                     		 										#
#Included Scripts   : 														                                        #
#                                                                                                                   #
# You should have received a copy of the  License along with this program;                                          #
# if not, write to the ASofttechnologies Pvt Ltd,Ernakulam Dist,Kerala -686689 India.                               #
# 					                                                                              				    #
#*******************************************************************************************************************#
?>


<!DOCTYPE html ><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> JobsEnq AdminLogin </title>
</head>
<!-- CSS style files -->
			<link href="<?php echo $base;?>/adminassets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

		<link href="<?php echo $base;?>/adminassets/css/default1.css" rel="stylesheet">
		<script src="<?php echo $base;?>/adminassets/js/jquery-1.10.2.min.js"></script>
		<script src="<?php echo $base;?>/adminassets/js/bootstrap/bootstrap.min.js"></script>  


<body id="loginbg" class="loginpage"> 
 
<!-- Start: login-holder -->
<div class="container" style="width:100% !important;" >
	
		<div class="logindiv">
				<div id="loginbox"><br>
                <center><img src="<?php echo $base;?>/adminassets/images/jobsenq.png" class="log_img" ></center>
                
	<!--  start login-inner -->
				<center>
				<form name="login" action="<?php echo site_url('admin/admin/login');?>" method="post">
				
				<div class="col-md8 lgmid">
				<div class="error"><?php echo $error;?></div>
                <br>
                
                <div class="form-group">
   
    <input type="text" class="form-control textbox" id="" name="email" placeholder="Enter The Username">
  </div>
				<div class="form-group">
    
    <input type="password" name="password"  class="form-control textbox" id="" placeholder="Enter The Password">
  </div>	
				<br>		
                        
                        
						
					
					<div style="align:center;"><input type="submit" class="submit-login loginbtn btn btn-warning"  value="Login" /></div>
				</div>
				
				




					</form></center>
                    
                    
                    
                    
                    
                    
                    
                    
				</div>
				</div>
		</div>

</div>

<!-- End: login-holder -->
</body>
</html
