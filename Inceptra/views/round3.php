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
<body id="commonbg">
<div class="container profile_cont">
  <div class="col-md-12 col-sm-12" style="padding-left:20px;">
    <div  class="profile-mid-img" >
      <div class="row borderrowf">
        <div class="col-sm-12">
          <H2>Instructions</H2>
        </div>
      </div>
      <div class="row borderrows"> </div>
      <div class="row" id="scrolldiv" style="margin:20px;">
        <!--First Jobs-->
        <div class="col-md-12 col-sm-12 " style="">
          <div class="col-md-12 col-sm-12">
            <p style="color: #fff; line-height: 1.5; font-size: 18px; padding-left:25px;">Some instructions about round 3 please read carefully </p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> In Match catch round the Code of a program will be provided & you have to predict the output.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Total number of Questions: 20.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Total time limit: 10 Minutes.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Total score: 28.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Each question will have 4 options. Choose the correct one wisely.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> For each correct answer you will get 4 marks.</p>
            
           <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> No negative marks for wrong answers.</p>
<p style="color: #ffa20f; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Once you select a option you cannot change the selection So be careful. </p>
           <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> After the Examination please press the submit button.</p>
          </div>
        </div>
        <!--/First Jobs-->
        <div class="row" style="padding:0px 80px;">
          <div class="col-md-4 ">
            <div class="col-md-12 maincontainorstartr1">
              <div class="circlehaderr1">
                <h2>Multi Choice</h2>
              </div>
              <input type="button" class="btn btn-primary btnstartnowr1" disabled value="Successfully Completed">
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-12 maincontainorstartr2">
              <div class="circlehaderr2">
                <h2>Pick Up Round</h2>
              </div>
              <input type="submit" class="btn btn-primary btnstartnowr2" disabled value="Successfully Completed">
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="col-md-12 maincontainorstartr3">
              <div class="circlehaderr3">
                <h2>Match Catch</h2>
              </div>
              <a href="startmatchcatch">
              <input type="submit" class="btn btn-primary btnstartnowr3" value="Start Now">
              </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
