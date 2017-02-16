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
<?php $error="";?></div>
</head>

<body id="commonbg">

<div class="container profile_cont">
 
<div class="col-md-12 col-sm-12" style="padding-left:20px;">
  <div  class="profile-mid-img" >
    <div class="row borderrowf">
      <div class="col-sm-12">
        <H2>Round3: Match Catch</H2>
      </div>
     
    </div>
    <div class="row borderrows">
      
    </div>
      
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
<script src="<?php echo $base."/".$js ?>/jquery.countdown.counter.matchcatch.js" type="text/javascript"></script> 
<script type="text/javascript">

 $(document).ready(function() {
        CounterInit();
 })
    </script>
        </div>
      
      <div class="row sociallinkingt"> <br>
      </div>
      <div class="row" id="scrolldiv" style="margin:20px;">
      <form class="matchcatchform" role="form" id="matchcatchform" action="<?php echo $site?>/Inceptra/do_matchcatch" method="post" enctype="multipart/form-data">
   
       
      <?php 
	  $questionno=0; 
	  foreach ($matchcatch as $onlinetest){
		  $questionno=$questionno+1;?>
		  
        <!--First Jobs-->
        <div class="col-md-12 col-sm-12" style="">
          <div class="row  tab_content_left" style="padding:10px;">
            <div class="col-md-12 col-sm-12" style="padding-bottom: 15px;  padding-left: 0px;">
              <div id="content_a">
                <div class="questionno pull-left"><?php echo $questionno?></div><h4 class="pull-left question"> 
				<?php echo $onlinetest->question?></h4>
                <input type="hidden" name="questionno<?php echo $questionno?>" value="<?php echo $onlinetest->q_id?>">
				
				<div class="col-sm-12 tabques" style="padding-left:80px;">
				<pre>
				<?php echo $onlinetest->q_code?>
				</pre>
				</div>
                <div class="row"><!--For qualification-->
                  <div class="col-sm-12 tabques" style="padding-left:80px;">
                    <div class="radio">
                      <label>
                        <input type="radio" class="check<?php echo $questionno?>" id="checkitem<?php echo $questionno?>"  name="Question<?php echo $questionno?>" value="<?php echo $onlinetest->value1?>">(A) &nbsp;&nbsp;
                        <?php echo $onlinetest->value1?> </label>
                    </div>
                  </div>
                </div>
                <!--For qualification closed-->
                <div class="row"><!--For qualification-->
                  <div class="col-sm-12 tabques" style="padding-left:80px;">
                    <div class="radio">
                      <label> 
                        <input type="radio" class="check<?php echo $questionno?>" id="checkitem<?php echo $questionno?>" name="Question<?php echo $questionno?>" value="<?php echo $onlinetest->value2?>">(B) &nbsp;&nbsp;
                      <?php echo $onlinetest->value2?></label>
                    </div>
                  </div>
                </div>
                <!--For qualification closed-->
                <div class="row"><!--For qualification-->
                  <div class="col-sm-12 tabques" style="padding-left:80px;">
                    <div class="radio">
                      <label> 
                        <input type="radio" class="check<?php echo $questionno?>" id="checkitem<?php echo $questionno?>"  name="Question<?php echo $questionno?>" value="<?php echo $onlinetest->value3?>">(C) &nbsp;&nbsp;
                      <?php echo $onlinetest->value3?></label>
                    </div>
                  </div>
                </div>
                <!--For roll closed-->
                <div class="row"><!--For qualification-->
                  <div class="col-sm-12 tabques" style="padding-left:80px;">
                    <div class="radio">
                      <label>
                        <input type="radio" class="check<?php echo $questionno?>" id="checkitem<?php echo $questionno?>" name="Question<?php echo $questionno?>" value="<?php echo $onlinetest->value4?>">(D) &nbsp;&nbsp;
                      <?php echo $onlinetest->value4?></label> 
                      
                      <input type="hidden" class="checkval<?php echo $questionno?>" name="Question<?php echo $questionno?>">
                    </div>
                  </div>
                </div>
                <!--For experience closed--> 
                
              </div>
            </div>
          </div>
          <!--inside row closed--> 
          
        </div>
        
        <!--/First Jobs--> 
       <?php }?>
        <div class="row"><!--For qualification-->
                  <div class="col-sm-12">
        <input type="submit" class="btn btn-primary  btn-lg"  value="Submit Answer" style="float:right; margin-right:80px; margin-top:15px;" />
        </div>
        </div>
       
        </form> </div>
    </div>
  </div>
  <script>
  
$('.check1').click(function(){
	$(".check1").attr("disabled", true);
	$(".checkval1").val($(this).val());
});
$('.check2').click(function(){
	$(".check2").attr("disabled", true);
	$(".checkval2").val($(this).val());
});
$('.check3').click(function(){
	$(".check3").attr("disabled", true);
	$(".checkval3").val($(this).val());
});
$('.check4').click(function(){
	$(".check4").attr("disabled", true);
	$(".checkval4").val($(this).val());
});
$('.check5').click(function(){

	$(".check5").attr("disabled", true);
	$(".checkval5").val($(this).val());
});
$('.check6').click(function(){

	$(".check6").attr("disabled", true);
	$(".checkval6").val($(this).val());
});
$('.check7').click(function(){
	
	$(".check7").attr("disabled", true);
	$(".checkval7").val($(this).val());
	
});
$('.check8').click(function(){
	
	$(".check8").attr("disabled", true);
	$(".checkval8").val($(this).val());
	
});


$('.check9').click(function(){
	
	$(".check9").attr("disabled", true);
	$(".checkval9").val($(this).val());
	
});
$('.check10').click(function(){
	
	$(".check10").attr("disabled", true);
	$(".checkval10").val($(this).val());
	
});
$('.check11').click(function(){
	
	$(".check11").attr("disabled", true);
	$(".checkval11").val($(this).val());
	
});
$('.check12').click(function(){
	
	$(".check12").attr("disabled", true);
	$(".checkval12").val($(this).val());
	
});
$('.check13').click(function(){
	
	$(".check13").attr("disabled", true);
	$(".checkval13").val($(this).val());
	
});
$('.check14').click(function(){
	
	$(".check14").attr("disabled", true);
	$(".checkval14").val($(this).val());
	
});
$('.check15').click(function(){
	
	$(".check15").attr("disabled", true);
	$(".checkval15").val($(this).val());
	
});
$('.check16').click(function(){
	
	$(".check16").attr("disabled", true);
	$(".checkval16").val($(this).val());
	
})
 ;$('.check17').click(function(){
	
	$(".check17").attr("disabled", true);
	$(".checkval17").val($(this).val());
	
});
$('.check18').click(function(){
	
	$(".check18").attr("disabled", true);
	$(".checkval18").val($(this).val());
	
});
$('.check19').click(function(){
	
	$(".check19").attr("disabled", true);
	$(".checkval19").val($(this).val());
	
});
$('.check20').click(function(){
	
	$(".check20").attr("disabled", true);
	$(".checkval20").val($(this).val());
	
});
  </script>
</div>
</body>
</html>
