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
            <p style="color: #fff; line-height: 1.5; font-size: 18px; padding-left:25px;">Some general instructions about the exam is provide below please read Carefully </p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Team shall consist of maximum two persons.</p>
 <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Test will be conducted in 3 Rounds.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Second and Third round will only be activated after the completion of preceding Rounds. </p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> The participants will not be allowed to use mobile or other electronic devices.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Once the Test is started you cannot go back or refresh the page as it would result data loss & automatic disqualification.</p>
<p style="color: #fff; line-height: 1.5; font-size: 18px; padding-left:25px;">Some instructions about the First round </p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Total number of Questions: 20.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Total time limit: 20 Minutes.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Total score: 40.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> Each question will have 4 options. Choose the correct one wisely.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> For each correct answer you will get 2 marks.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> For each wrong answer 1 mark will be deducted.</p>
            <p style="color: #66cccc; line-height: 1.5; font-size: 18px; padding-left:25px;"><i class="fa fa-asterisk"></i> No negative marks for unattended questions.</p>
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
              <a href="startmultichoice">
              <input type="button" class="btn btn-primary btnstartnowr1" value="Start Now">
              </a> </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-12 maincontainorstartr2">
              <div class="circlehaderr2">
                <h2>Pick Up Round</h2>
              </div>
              <input type="submit" class="btn btn-primary btnstartnowr2" disabled value="Start Now">
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="col-md-12 maincontainorstartr3">
              <div class="circlehaderr3">
                <h2>Match Catch</h2>
              </div>
              <input type="submit" class="btn btn-primary btnstartnowr3" disabled value="Start Now">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
