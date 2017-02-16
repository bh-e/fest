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
      <form class="pickupform" role="form" id="pickupform" action="<?php echo $site?>/Inceptra/do_pickup1" method="post" enctype="multipart/form-data">
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
	if (ans1<=1)
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
	if (ans2<=1)
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
 var ans3=0;
$('.imagechoice3').click(function(){
	ans3=ans3+1;
	//alert(ans1);
	if (ans3<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk31').attr('checked', true);
		$('#icontrue31').show();
	}if (choice==2)
	{
		$('#imgchk32').attr('checked', true);
		$('#icontrue32').show();
	}if (choice==3)
	{
		$('#imgchk33').attr('checked', true);
		$('#icontrue33').show();
	}if (choice==4)
	{
		$('#imgchk34').attr('checked', true);
		$('#icontrue34').show();
	}if (choice==5)
	{
		$('#imgchk35').attr('checked', true);
		$('#icontrue35').show();
	}
	if (choice==6)
	{
		$('#imgchk36').attr('checked', true);
		$('#icontrue36').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});
 var ans4=0;
$('.imagechoice4').click(function(){
	ans4=ans4+1;
	//alert(ans1);
	if (ans4<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk41').attr('checked', true);
		$('#icontrue41').show();
	}if (choice==2)
	{
		$('#imgchk42').attr('checked', true);
		$('#icontrue42').show();
	}if (choice==3)
	{
		$('#imgchk43').attr('checked', true);
		$('#icontrue43').show();
	}if (choice==4)
	{
		$('#imgchk44').attr('checked', true);
		$('#icontrue44').show();
	}if (choice==5)
	{
		$('#imgchk45').attr('checked', true);
		$('#icontrue45').show();
	}
	if (choice==6)
	{
		$('#imgchk46').attr('checked', true);
		$('#icontrue46').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});
 
 
 var ans5=0;
$('.imagechoice5').click(function(){
	ans5=ans5+1;
	//alert(ans1);
	if (ans5<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk51').attr('checked', true);
		$('#icontrue51').show();
	}if (choice==2)
	{
		$('#imgchk52').attr('checked', true);
		$('#icontrue52').show();
	}if (choice==3)
	{
		$('#imgchk53').attr('checked', true);
		$('#icontrue53').show();
	}if (choice==4)
	{
		$('#imgchk54').attr('checked', true);
		$('#icontrue54').show();
	}if (choice==5)
	{
		$('#imgchk55').attr('checked', true);
		$('#icontrue55').show();
	}
	if (choice==6)
	{
		$('#imgchk56').attr('checked', true);
		$('#icontrue56').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});


 var ans6=0;
$('.imagechoice6').click(function(){
	ans6=ans6+1;
	//alert(ans1);
	if (ans6<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk61').attr('checked', true);
		$('#icontrue61').show();
	}if (choice==2)
	{
		$('#imgchk62').attr('checked', true);
		$('#icontrue62').show();
	}if (choice==3)
	{
		$('#imgchk63').attr('checked', true);
		$('#icontrue63').show();
	}if (choice==4)
	{
		$('#imgchk64').attr('checked', true);
		$('#icontrue64').show();
	}if (choice==5)
	{
		$('#imgchk65').attr('checked', true);
		$('#icontrue65').show();
	}
	if (choice==6)
	{
		$('#imgchk66').attr('checked', true);
		$('#icontrue66').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});


 var ans7=0;
$('.imagechoice7').click(function(){
	ans7=ans7+1;
	//alert(ans1);
	if (ans7<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk71').attr('checked', true);
		$('#icontrue71').show();
	}if (choice==2)
	{
		$('#imgchk72').attr('checked', true);
		$('#icontrue72').show();
	}if (choice==3)
	{
		$('#imgchk73').attr('checked', true);
		$('#icontrue73').show();
	}if (choice==4)
	{
		$('#imgchk74').attr('checked', true);
		$('#icontrue74').show();
	}if (choice==5)
	{
		$('#imgchk75').attr('checked', true);
		$('#icontrue75').show();
	}
	if (choice==6)
	{
		$('#imgchk76').attr('checked', true);
		$('#icontrue76').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});


 var ans8=0;
$('.imagechoice8').click(function(){
	ans8=ans8+1;
	//alert(ans1);
	if (ans8<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk81').attr('checked', true);
		$('#icontrue81').show();
	}if (choice==2)
	{
		$('#imgchk82').attr('checked', true);
		$('#icontrue82').show();
	}if (choice==3)
	{
		$('#imgchk83').attr('checked', true);
		$('#icontrue83').show();
	}if (choice==4)
	{
		$('#imgchk84').attr('checked', true);
		$('#icontrue84').show();
	}if (choice==5)
	{
		$('#imgchk85').attr('checked', true);
		$('#icontrue85').show();
	}
	if (choice==6)
	{
		$('#imgchk86').attr('checked', true);
		$('#icontrue86').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});


 var ans9=0;
$('.imagechoice9').click(function(){
	ans9=ans9+1;
	//alert(ans1);
	if (ans9<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk91').attr('checked', true);
		$('#icontrue91').show();
	}if (choice==2)
	{
		$('#imgchk92').attr('checked', true);
		$('#icontrue92').show();
	}if (choice==3)
	{
		$('#imgchk93').attr('checked', true);
		$('#icontrue93').show();
	}if (choice==4)
	{
		$('#imgchk94').attr('checked', true);
		$('#icontrue94').show();
	}if (choice==5)
	{
		$('#imgchk95').attr('checked', true);
		$('#icontrue95').show();
	}
	if (choice==6)
	{
		$('#imgchk96').attr('checked', true);
		$('#icontrue96').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});



var ans10=0;
$('.imagechoice10').click(function(){
	ans10=ans10+1;
	//alert(ans1);
	if (ans10<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk101').attr('checked', true);
		$('#icontrue101').show();
	}if (choice==2)
	{
		$('#imgchk102').attr('checked', true);
		$('#icontrue102').show();
	}if (choice==3)
	{
		$('#imgchk103').attr('checked', true);
		$('#icontrue103').show();
	}if (choice==4)
	{
		$('#imgchk104').attr('checked', true);
		$('#icontrue104').show();
	}if (choice==5)
	{
		$('#imgchk105').attr('checked', true);
		$('#icontrue105').show();
	}
	if (choice==6)
	{
		$('#imgchk106').attr('checked', true);
		$('#icontrue106').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});


var ans11=0;
$('.imagechoice11').click(function(){
	ans11=ans11+1;
	//alert(ans1);
	if (ans10<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk111').attr('checked', true);
		$('#icontrue111').show();
	}if (choice==2)
	{
		$('#imgchk112').attr('checked', true);
		$('#icontrue112').show();
	}if (choice==3)
	{
		$('#imgchk113').attr('checked', true);
		$('#icontrue113').show();
	}if (choice==4)
	{
		$('#imgchk114').attr('checked', true);
		$('#icontrue114').show();
	}if (choice==5)
	{
		$('#imgchk115').attr('checked', true);
		$('#icontrue115').show();
	}
	if (choice==6)
	{
		$('#imgchk116').attr('checked', true);
		$('#icontrue116').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});


var ans12=0;
$('.imagechoice12').click(function(){
	ans12=ans12+1;
	//alert(ans1);
	if (ans12<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk121').attr('checked', true);
		$('#icontrue121').show();
	}if (choice==2)
	{
		$('#imgchk122').attr('checked', true);
		$('#icontrue122').show();
	}if (choice==3)
	{
		$('#imgchk123').attr('checked', true);
		$('#icontrue123').show();
	}if (choice==4)
	{
		$('#imgchk124').attr('checked', true);
		$('#icontrue124').show();
	}if (choice==5)
	{
		$('#imgchk125').attr('checked', true);
		$('#icontrue125').show();
	}
	if (choice==6)
	{
		$('#imgchk126').attr('checked', true);
		$('#icontrue126').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});


var ans13=0;
$('.imagechoice13').click(function(){
	ans13=ans13+1;
	//alert(ans1);
	if (ans13<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk131').attr('checked', true);
		$('#icontrue131').show();
	}if (choice==2)
	{
		$('#imgchk132').attr('checked', true);
		$('#icontrue132').show();
	}if (choice==3)
	{
		$('#imgchk133').attr('checked', true);
		$('#icontrue133').show();
	}if (choice==4)
	{
		$('#imgchk134').attr('checked', true);
		$('#icontrue134').show();
	}if (choice==5)
	{
		$('#imgchk135').attr('checked', true);
		$('#icontrue135').show();
	}
	if (choice==6)
	{
		$('#imgchk136').attr('checked', true);
		$('#icontrue136').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});



var ans14=0;
$('.imagechoice14').click(function(){
	ans14=ans14+1;
	//alert(ans1);
	if (ans14<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk141').attr('checked', true);
		$('#icontrue141').show();
	}if (choice==2)
	{
		$('#imgchk142').attr('checked', true);
		$('#icontrue142').show();
	}if (choice==3)
	{
		$('#imgchk143').attr('checked', true);
		$('#icontrue143').show();
	}if (choice==4)
	{
		$('#imgchk144').attr('checked', true);
		$('#icontrue144').show();
	}if (choice==5)
	{
		$('#imgchk145').attr('checked', true);
		$('#icontrue145').show();
	}
	if (choice==6)
	{
		$('#imgchk146').attr('checked', true);
		$('#icontrue146').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});


var ans15=0;
$('.imagechoice15').click(function(){
	ans15=ans15+1;
	//alert(ans1);
	if (ans15<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk151').attr('checked', true);
		$('#icontrue151').show();
	}if (choice==2)
	{
		$('#imgchk152').attr('checked', true);
		$('#icontrue152').show();
	}if (choice==3)
	{
		$('#imgchk153').attr('checked', true);
		$('#icontrue153').show();
	}if (choice==4)
	{
		$('#imgchk154').attr('checked', true);
		$('#icontrue154').show();
	}if (choice==5)
	{
		$('#imgchk155').attr('checked', true);
		$('#icontrue155').show();
	}
	if (choice==6)
	{
		$('#imgchk156').attr('checked', true);
		$('#icontrue156').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});



var ans16=0;
$('.imagechoice16').click(function(){
	ans16=ans16+1;
	//alert(ans1);
	if (ans16<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk161').attr('checked', true);
		$('#icontrue161').show();
	}if (choice==2)
	{
		$('#imgchk162').attr('checked', true);
		$('#icontrue162').show();
	}if (choice==3)
	{
		$('#imgchk163').attr('checked', true);
		$('#icontrue163').show();
	}if (choice==4)
	{
		$('#imgchk164').attr('checked', true);
		$('#icontrue164').show();
	}if (choice==5)
	{
		$('#imgchk165').attr('checked', true);
		$('#icontrue165').show();
	}
	if (choice==6)
	{
		$('#imgchk166').attr('checked', true);
		$('#icontrue166').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});



var ans17=0;
$('.imagechoice17').click(function(){
	ans17=ans17+1;
	//alert(ans1);
	if (ans17<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk171').attr('checked', true);
		$('#icontrue171').show();
	}if (choice==2)
	{
		$('#imgchk172').attr('checked', true);
		$('#icontrue172').show();
	}if (choice==3)
	{
		$('#imgchk173').attr('checked', true);
		$('#icontrue173').show();
	}if (choice==4)
	{
		$('#imgchk174').attr('checked', true);
		$('#icontrue174').show();
	}if (choice==5)
	{
		$('#imgchk175').attr('checked', true);
		$('#icontrue175').show();
	}
	if (choice==6)
	{
		$('#imgchk176').attr('checked', true);
		$('#icontrue176').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});



var ans18=0;
$('.imagechoice18').click(function(){
	ans18=ans18+1;
	//alert(ans1);
	if (ans18<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk181').attr('checked', true);
		$('#icontrue181').show();
	}if (choice==2)
	{
		$('#imgchk182').attr('checked', true);
		$('#icontrue182').show();
	}if (choice==3)
	{
		$('#imgchk183').attr('checked', true);
		$('#icontrue183').show();
	}if (choice==4)
	{
		$('#imgchk184').attr('checked', true);
		$('#icontrue184').show();
	}if (choice==5)
	{
		$('#imgchk185').attr('checked', true);
		$('#icontrue185').show();
	}
	if (choice==6)
	{
		$('#imgchk186').attr('checked', true);
		$('#icontrue186').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});


var ans19=0;
$('.imagechoice19').click(function(){
	ans19=ans19+1;
	//alert(ans1);
	if (ans19<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk191').attr('checked', true);
		$('#icontrue191').show();
	}if (choice==2)
	{
		$('#imgchk192').attr('checked', true);
		$('#icontrue192').show();
	}if (choice==3)
	{
		$('#imgchk193').attr('checked', true);
		$('#icontrue193').show();
	}if (choice==4)
	{
		$('#imgchk194').attr('checked', true);
		$('#icontrue194').show();
	}if (choice==5)
	{
		$('#imgchk195').attr('checked', true);
		$('#icontrue195').show();
	}
	if (choice==6)
	{
		$('#imgchk196').attr('checked', true);
		$('#icontrue196').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});


var ans20=0;
$('.imagechoice20').click(function(){
	ans20=ans20+1;
	//alert(ans1);
	if (ans20<=1)
	{
	var choice;
	$(this).addClass('imagechoiced');
	choice=$(this).attr('longdesc');
	if (choice==1)
	{
		$('#imgchk201').attr('checked', true);
		$('#icontrue201').show();
	}if (choice==2)
	{
		$('#imgchk202').attr('checked', true);
		$('#icontrue202').show();
	}if (choice==3)
	{
		$('#imgchk203').attr('checked', true);
		$('#icontrue203').show();
	}if (choice==4)
	{
		$('#imgchk204').attr('checked', true);
		$('#icontrue204').show();
	}if (choice==5)
	{
		$('#imgchk205').attr('checked', true);
		$('#icontrue205').show();
	}
	if (choice==6)
	{
		$('#imgchk206').attr('checked', true);
		$('#icontrue206').show();
	}
	}
	//$('.icontrue').show();
     //ans1+=", "+$(this).attr('alt');
});





















  </script>
</div>
</body>
</html>
