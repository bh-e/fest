<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Finding Nemo</title>
<link type="text/css" rel="stylesheet" href="<?php echo $base."/".$css ?>/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $base."/".$css ?>/style.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $base."/".$css ?>/font-awesome.min.css" />
<link rel="stylesheet" href="<?php echo $base."/".$css ?>/jquery.countdown.timer.css" type="text/css" />
<script src="<?php echo $base."/".$js ?>/jquery-2.2.0.js"></script>
<script src="<?php echo $base."/".$js ?>/bootstrap.js"></script>
<script type="text/javascript">
   
	function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
	$(document).on("keydown", disableF5);
</script>
<style>
.loaderimage
{
	position: absolute;
    top: 50%;
    left: 50%;
   width:250px;
   height:250px;
   z-index:5px;
}

</style>
<?php $error="";?>
</div>
</head>
<body id="commonbg">
<div class="container profile_cont">
  <div class="col-md-12 col-sm-12" style="padding-left:20px;">
    <div  class="profile-mid-img" >
      <div class="row borderrowf">
        <div class="col-sm-12">
          <H2>Round2: Pick Up</H2>
        </div>
      </div>
      <div class="row borderrows"> </div>
      <img src="[~$base~]/[~$images~]/loading.gif" id="loaderimage" class="loaderimage">
      <div id="counter">
        <div id="counter_item1" class="counter_item">
          <div class="front"></div>
          <div class="digit digit0"></div>
        </div>
        <div id="counter_item2" class="counter_item">
          <div class="front"></div>
          <div class="digit digit0"></div>
        </div>
        <div id="counter_item3" class="counter_item">
          <div class="front"></div>
          <div class="digit digit_colon"></div>
        </div>
        <div id="counter_item4" class="counter_item">
          <div class="front"></div>
          <div class="digit digit0"></div>
        </div>
        <div id="counter_item5" class="counter_item">
          <div class="front"></div>
          <div class="digit digit0"></div>
        </div>
      </div>
      <script src="<?php echo $base."/".$js ?>/jquery.timeout.interval.idle.js" type="text/javascript"></script>
      <script src="<?php echo $base."/".$js ?>/jquery.countdown.counter.pickup.js" type="text/javascript"></script>
      <script type="text/javascript">

 $(document).ready(function() {
        CounterInit();
 })
 
 
 
    </script>
    </div>
    <div class="row sociallinkingt"> <br>
    </div>
    <div class="row" id="scrolldiv" style="margin:20px;">
      <form class="pickupform" role="form" id="pickupform" action="<?php echo $site?>/Inceptra/do_pickup2" method="post" enctype="multipart/form-data">
        <input type="hidden" name="examtype" value="<?php echo $pickup[0]->category?>">
        <?php 
	  $questionno=0; 
	  foreach ($pickup as $onlinetest){
		  $questionno=$questionno+1;?>
        <!--First Jobs-->
        <div class="col-md-12 col-sm-12" style="">
          <div class="row  tab_content_left" style="padding:10px;">
            <div class="col-md-12 col-sm-12" style="padding-bottom: 15px;  padding-left: 0px;">
              <div id="content_a">
                <div class="questionno pull-left"><?php echo $questionno?></div>
                <h4 class="pull-left question"> <?php echo $onlinetest->question?></h4>
                <input type="hidden" name="questionno<?php echo $questionno?>" value="<?php echo $onlinetest->p_id?>">
                <div class="row" style="padding-left:40px;">
                  <!--For qualification-->
                  <div class="col-sm-4 tabques" style="padding:20px;">
                    <div class="icontrue" id="icontrue<?php echo $questionno?>1"><i class="fa fa-check-circle-o"></i></div>
                    <img class="img-responsive imagechoice<?php echo $questionno?>" longdesc="1" src="<?php echo $base."/".$img ?>/<?php echo $onlinetest->image1?>" alt="<?php echo $onlinetest->title1?>" >
                    <input type="checkbox" class="hidden" name="firstimg<?php echo $questionno?>[]" id="imgchk<?php echo $questionno?>1" value="<?php echo $onlinetest->title1?>">
                  </div>
                  <div class="col-sm-4 tabques" style="padding:20px;">
                    <div class="icontrue" id="icontrue<?php echo $questionno?>2"><i class="fa fa-check-circle-o"></i></div>
                    <img class="img-responsive imagechoice<?php echo $questionno?>" longdesc="2" src="<?php echo $base."/".$img ?>/<?php echo $onlinetest->image2?>" alt="<?php echo $onlinetest->title2?>" >
                    <input type="checkbox" class="hidden" name="firstimg<?php echo $questionno?>[]" id="imgchk<?php echo $questionno?>2" value="<?php echo $onlinetest->title2?>">
                  </div>
                  <div class="col-sm-4 tabques" style="padding:20px;">
                    <div class="icontrue" id="icontrue<?php echo $questionno?>3"><i class="fa fa-check-circle-o"></i></div>
                    <img class="img-responsive imagechoice<?php echo $questionno?>" longdesc="3" src="<?php echo $base."/".$img ?>/<?php echo $onlinetest->image3?>" alt="<?php echo $onlinetest->title3?>" >
                    <input type="checkbox" class="hidden" name="firstimg<?php echo $questionno?>[]" id="imgchk<?php echo $questionno?>3" value="<?php echo $onlinetest->title3?>">
                  </div>
                </div>
                <div class="row" style="padding-left:40px;">
                  <!--For qualification-->
                  <div class="col-sm-4 tabques" style="padding:20px;">
                    <div class="icontrue" id="icontrue<?php echo $questionno?>4"><i class="fa fa-check-circle-o"></i></div>
                    <img class="img-responsive imagechoice<?php echo $questionno?>" longdesc="4" src="<?php echo $base."/".$img ?>/<?php echo $onlinetest->image4?>" alt="<?php echo $onlinetest->title4?>" >
                    <input type="checkbox" class="hidden" name="firstimg<?php echo $questionno?>[]" id="imgchk<?php echo $questionno?>4" value="<?php echo $onlinetest->title4?>">
                  </div>
                  <div class="col-sm-4 tabques" style="padding:20px;">
                    <div class="icontrue" id="icontrue<?php echo $questionno?>5"><i class="fa fa-check-circle-o"></i></div>
                    <img class="img-responsive imagechoice<?php echo $questionno?>" longdesc="5" src="<?php echo $base."/".$img ?>/<?php echo $onlinetest->image5?>" alt="<?php echo $onlinetest->title5?>" >
                    <input type="checkbox" class="hidden" name="firstimg<?php echo $questionno?>[]" id="imgchk<?php echo $questionno?>5" value="<?php echo $onlinetest->title5?>">
                  </div>
                  <div class="col-sm-4 tabques" style="padding:20px;">
                    <div class="icontrue" id="icontrue<?php echo $questionno?>6"><i class="fa fa-check-circle-o"></i></div>
                    <img class="img-responsive imagechoice<?php echo $questionno?>" longdesc="6" src="<?php echo $base."/".$img ?>/<?php echo $onlinetest->image6?>" alt="<?php echo $onlinetest->title6?>" >
                    <input type="checkbox" class="hidden" name="firstimg<?php echo $questionno?>[]" id="imgchk<?php echo $questionno?>6" value="<?php echo $onlinetest->title6?>">
                  </div>
                </div>
                <!--For qualification closed-->
              </div>
            </div>
          </div>
          <!--inside row closed-->
        </div>
        <!--/First Jobs-->
        <?php }?>
        <div class="row">
          <!--For qualification-->
          <div class="col-sm-12">
            <input type="submit" class="btn btn-primary  btn-lg" id=""  value="Submit Answer" style="float:right; margin-right:80px; margin-top:15px;" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  var ans1=0;
$('.imagechoice1').click(function(){
	ans1=ans1+1;
	//alert(ans1);
	if (ans1<=3)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk11').attr('checked', true);
		$('#icontrue11').show();
	}if (choice==2)
	{
		$('#imgchk12').attr('checked', true);
		$('#icontrue12').show();
	}if (choice==3)
	{
		$('#imgchk13').attr('checked', true);
		$('#icontrue13').show();
	}if (choice==4)
	{
		$('#imgchk14').attr('checked', true);
		$('#icontrue14').show();
	}if (choice==5)
	{
		$('#imgchk15').attr('checked', true);
		$('#icontrue15').show();
	}
	if (choice==6)
	{
		$('#imgchk16').attr('checked', true);
		$('#icontrue16').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});

var ans2=0;
$('.imagechoice2').click(function(){
	ans2=ans2+1;
	//alert(ans1);
	if (ans2<=3)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk21').attr('checked', true);
		$('#icontrue21').show();
	}if (choice==2)
	{
		$('#imgchk22').attr('checked', true);
		$('#icontrue22').show();
	}if (choice==3)
	{
		$('#imgchk23').attr('checked', true);
		$('#icontrue23').show();
	}if (choice==4)
	{
		$('#imgchk24').attr('checked', true);
		$('#icontrue24').show();
	}if (choice==5)
	{
		$('#imgchk25').attr('checked', true);
		$('#icontrue25').show();
	}
	if (choice==6)
	{
		$('#imgchk26').attr('checked', true);
		$('#icontrue26').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});



  </script>
</div>
</body>
</html>
