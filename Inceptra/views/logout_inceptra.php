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
<script type="text/javascript">
    
	function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
	$(document).on("keydown", disableF5);
</script>
<?php $error="";?>
</div>
</head>
<body id="logoutbg" class="logoutpage">
<!-- Start: login-holder -->
<div class="container" style="width:100% !important;" >
  <div class="logoutdiv">
    <div id="logoutbox"><br>
      <center>
        <!--<img src="<?php /*echo $base;*/?>/adminassets/images/jobsenq.png" class="log_img" >-->
      </center>
      <!--  start login-inner -->
      <center>
        <div class="col-md8 lgmid"> <br>
          <p style="color: #fff; line-height: 1.5; font-size: 18px; padding-left:25px;">Thanks For Attending Quiz round of Finding Nemo 2k17. Please logout before leaving </p>
          <div style="align:center;"><a href="logout">
            <input type="button" class="submit-login loginbtn btn btn-primary"  value="Logout" />
            </a></div>
        </div>
      </center>
    </div>
  </div>
</div>
</div>
<!-- End: login-holder -->
</body>
</html>
