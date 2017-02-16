<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Finding Nemo</title>
<link type="text/css" rel="stylesheet" href="<?php echo $base."/".$css ?>/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $base."/".$css ?>/style.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $base."/".$css ?>/font-awesome.min.css" />
<script src="<?php echo $base."/".$js ?>/jquery-2.2.0.js"></script>
<script src="<?php echo $base."/".$js ?>/bootstrap.js"></script>
</div>
</head>
<body id="loginbg" class="loginpage">
<!-- Start: login-holder -->
<div class="container" style="width:100% !important;" >
  <div class="logindiv">
    <div id="loginbox"><br>
      <center>
        <!--<img src="<?php /*echo $base;*/?>/adminassets/images/jobsenq.png" class="log_img" >-->
      </center>
      <!--  start login-inner -->
      <center>
        <form name="login" action="<?php echo $site;?>/Inceptra/do_login" method="post" class="loginform">
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
            <div style="align:center;">
              <input type="submit" class="submit-login loginbtn btn btn-primary"  value="Login" />
            </div>
          </div>
        </form>
      </center>
    </div>
  </div>
</div>
</div>
<!-- End: login-holder -->
</body>
</html>
