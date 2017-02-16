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
        <H2>Round1: Multichoice</H2>
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
<script src="<?php echo $base."/".$js ?>/jquery.countdown.counter.multichoice.js" type="text/javascript"></script> 
<script type="text/javascript">

 $(document).ready(function() {
	 
        CounterInit();
		
 })
    </script>
   
        </div>
      
      <div class="row sociallinkingt"> <br>
      </div>
      <div class="row" id="scrolldiv" style="margin:20px;">
      <form class="multichoiceform" role="form" id="multichoiceform" action="<?php echo $site?>/Inceptra/do_multichoice" method="post" enctype="multipart/form-data">
      <input type="hidden" name="examtype" value="<?php echo $multichoice[0]->examtype?>">
       
      <?php 
	  $questionno=0; 
	  foreach ($multichoice as $onlinetest){
		  $questionno=$questionno+1;?>
		  
        <!--First Jobs-->
        <div class="col-md-12 col-sm-12" style="">
          <div class="row  tab_content_left" style="padding:10px;">
            <div class="col-md-12 col-sm-12" style="padding-bottom: 15px;  padding-left: 0px;">
              <div id="content_a">
                <div class="questionno pull-left"><?php echo $questionno?></div><h4 class="pull-left question"> 
				<?php echo $onlinetest->question?></h4>
                <input type="hidden" name="questionno<?php echo $questionno?>" value="<?php echo $onlinetest->q_id?>">
                <div class="row"><!--For qualification-->
                  <div class="col-sm-12 tabques" style="padding-left:80px;">
                    <div class="radio">
                      <label>
                        <input type="radio" name="Question<?php echo $questionno?>" value="<?php echo $onlinetest->value1?>">(A) &nbsp;&nbsp;
                        <?php echo $onlinetest->value1?> </label>
                    </div>
                  </div>
                </div>
                <!--For qualification closed-->
                <div class="row"><!--For qualification-->
                  <div class="col-sm-12 tabques" style="padding-left:80px;">
                    <div class="radio">
                      <label> 
                        <input type="radio" name="Question<?php echo $questionno?>" value="<?php echo $onlinetest->value2?>">(B) &nbsp;&nbsp;
                      <?php echo $onlinetest->value2?></label>
                    </div>
                  </div>
                </div>
                <!--For qualification closed-->
                <div class="row"><!--For qualification-->
                  <div class="col-sm-12 tabques" style="padding-left:80px;">
                    <div class="radio">
                      <label> 
                        <input type="radio" name="Question<?php echo $questionno?>" value="<?php echo $onlinetest->value3?>">(C) &nbsp;&nbsp;
                      <?php echo $onlinetest->value3?></label>
                    </div>
                  </div>
                </div>
                <!--For roll closed-->
                <div class="row"><!--For qualification-->
                  <div class="col-sm-12 tabques" style="padding-left:80px;">
                    <div class="radio">
                      <label>
                        <input type="radio" name="Question<?php echo $questionno?>" value="<?php echo $onlinetest->value4?>">(D) &nbsp;&nbsp;
                      <?php echo $onlinetest->value4?></label>
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
  
</div>
</body>
</html>
