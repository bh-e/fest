

<?php include "header.php" ?>
<?php include "leftsidebar.php" ?>
<link rel="shortcut icon" type="image/png" href="/jobsenqfavicon.png"/>
<link rel="shortcut icon" type="image/png" href="[~$base~]/[~$images~]/jobsenqfavicon.png"/>
<!--including favicon-->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="[~$base~]/[~$css~]/bootstrap.css">

<!-- Optional theme -->
<link rel="stylesheet" href="[~$base~]/[~$css~]/style.css">
<link rel="stylesheet" href="[~$base~]/[~$css~]/popup.css">
<script type="text/javascript" src="[~$base~]/[~$js~]/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="[~$base~]/[~$js~]/bootstrap.js"></script>
 <script>
 $(document).ready(function()
  {
$('#posteddate').change(function()
  {
 var posteddate=$('#posteddate').val();
 //alert(posteddate);
 $.ajax({
	 		 type:"POST",
			 url:"<?php echo $site?>/jobsenq/datepostedjob",
			 data:{posteddate:posteddate},
			
			 success:function(data)
			 {
				
				if(data!="")
			 $('#scrolldiv').html(data);
				
			 }
		  })
  });
  });
</script>


<div id="page-content">
	<div id='wrap'>


<div class="col-md-12 col-sm-12" style="padding-left:20px;">
  <div  class="profile-mid-img" >
    
    <div class="row sociallinkingb">
    <br>
    
      <div class="col-sm-12">
        <H3>Posted Jobs</H3>
      
      
      </div>
      
     
      
      
      
      
    </div>
     <div class="row sociallinkingt">
     <br>
     </div>
     
     
     <!--<form>
     <div class="row sortbydate">
Sort by posted Date: <select id="posteddate">
<option>--select--</option>
<option>This Week</option>
<option>Last Week</option>
<option>Last Month</option>
<option>Last 4 Months</option>
<option>Last 8 Months</option>
</select>
</div>
</form>-->

    
    
    
    <div class="row" id="scrolldiv" style="margin:20px;">
    
    
    
    
    
    
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php $j=0; 
	foreach($latestPostedJobs as $i)
	if (!empty($i)){?>
   <!--First Jobs-->
      <div class="col-md-12 col-sm-12 tab_content_left" style="">
        <div id="[~$query3[i]->id~]" class="message_box">
          <div class="row " style="padding:10px;">
            
            <div class="col-md-9 col-sm-9" style="padding-bottom: 45px;">
              <div id="content_a">
                <h4><?php echo $i->caption?></h4>
                <div class="row"><!--For qualification-->
                  <div class="col-sm-5 tabques"> Job Id </div>
                  <div class="col-sm-7 tabansw"> <strong>:</strong> <?php echo $i->id?> </div>
                  <input type="hidden" value="<?php echo $i->id?>" id="jobid" class="jobid" disabled >
                </div>
                <!--For qualification closed-->
                <div class="row"><!--For qualification-->
                  <div class="col-sm-5 tabques"> Job Type </div>
                  <div class="col-sm-7 tabansw"> <strong>:</strong> <?php echo $i->jobtype?>  </div>
                </div>
                <!--For qualification closed-->
                <div class="row"><!--For qualification-->
                  <div class="col-sm-5 tabques"> Qualification </div>
                  <div class="col-sm-7 tabansw"> <strong>:</strong>  <?php echo $i->qualification?>   </div>
                </div>
                <!--For qualification closed-->
                <div class="row"><!--For roll-->
                  <div class="col-sm-5 tabques"> Designation </div>
                  <div class="col-sm-7 tabansw"> <strong>:</strong>  <?php echo $i->designation?> </div>
                </div>
                <!--For roll closed-->
                <div class="row"><!--For experience-->
                  <div class="col-sm-5 tabques"> Vacancy </div>
                  <div class="col-sm-7 tabansw"> <strong>:</strong> <?php echo $i->vacancy?> </div>
                </div>
                <!--For experience closed-->
                <div class="row"><!--For experience-->
                  <div class="col-sm-5 tabques"> Experience </div>
                  <div class="col-sm-7 tabansw"> <strong>:</strong> <?php echo $i->experience?> </div>
                </div>
                <!--For experience closed-->
                <div class="row"><!--For exp area-->
                  <div class="col-sm-5 tabques"> Experience Areas </div>
                  <div class="col-sm-7 tabansw"> <strong>:</strong> <?php echo $i->skill?> </div>
                </div>
                <!--For qualification-->
                
                
                <div class="row"><!--For experience-->
                  <div class="col-sm-5 tabques"> Location </div>
                  <div class="col-sm-7 tabansw"> <strong>:</strong> <?php echo $i->location?> </div>
                </div>
                <!--For experience closed-->
                <div class="row"><!--For experience-->
                  <div class="col-sm-5 tabques"> Salary Offers </div>
                  <div class="col-sm-7 tabansw"> <strong>:</strong> <?php echo $i->salary?> </div>
                </div>
                <!--For experience closed-->
                <div class="row"><!--For experience-->
                  <div class="col-sm-5 tabques"> Lastdate for Apply </div>
                  <div class="col-sm-7 tabansw"> <strong>:</strong> <?php echo $i->lastdate?> </div>
                </div>
                <!--For experience closed-->
                
                <div class="row"><!--For experience-->
                  <div class="col-sm-5 tabques"> Preference </div>
                  <div class="col-sm-7 tabansw"> <strong>:</strong> <?php echo $i->preference?> </div>
                </div>
                <!--For experience closed-->
                
                
                <div class="row"><!--For job description-->
                  <div class="col-sm-5 tabques"> Description </div>
                  <div class="col-sm-7 tabansw"> <strong>:</strong> <?php echo $i->description?>. </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
            
           <div id="image_a"> 
              <div class="empprofileimg">
                    <img style="height:120px; width:150px;" class="img-responsive tabimage" src="<?php echo $i->logo?>">
      
      
                   </div> 
             <!-- <img src="http://localhost/ASoft/Projects/JobsEnq/assets/images/logos/images.jpg"  class="img-responsive tabimage" style="height:130px; width:100%;">-->
                <p style="text-align:center; font-size:14px; font-weight:bold; color:#0072b1; padding-top:10px;"><?php echo $i->company_name?><br>
                  <?php echo $i->state?>,<?php echo $i->country?><br>
                </p>
                
              </div>

           
          <!-- <a href="[~$site~]/jobsenq/jobapplicants/[~$latestPostedJobs[i]->id~]">-->
        <div class="circleprofile"><?php echo $count_appliedjobs[$j] ?></div>
    <!--    </a>-->
        <div class="profilename">Total Response </div>
       <!--=========================for fb link=======================-->   
        <br>
        
        
      
        
        <style type="text/css">
	img.share_button { cursor: pointer; }
</style>



        
        <div id="fb-root"></div>

<!-- USE 'Asynchronous Loading' version, for IE8 to work
http://developers.facebook.com/docs/reference/javascript/FB.init/ -->

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId  : '1431049367212690',
      status : true, // check login status
      cookie : true, // enable cookies to allow the server to access the session
      xfbml  : true  // parse XFBML
    });
  };

  (function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
  }());
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
<input type="hidden" id="shareimage<?php echo $i->id?>" value="<?php echo $i->logo?>">
        <input type="hidden" id="sharecaption<?php echo $i->id?>" value="<?php echo $i->caption?>"> 
        <input type="hidden" id="sharename<?php echo $i->id?>" value="<?php echo $i->company_name?>"> 
        <input type="hidden" id="sharenoimage" value="<?php echo $base?>/<?php echo $images?>/logodemo.jpg">
        <input type="hidden" id="sharedescription<?php echo $i->id?>" value="<?php echo $i->description?>">
       <center><img id = "<?php echo $i->id?>" width="120" height="50" class="share_button" src = "<?php echo $base?>/<?php echo $images?>/ShareFacebook.png" onClick="sharejobs(<?php echo $i->id?>);"></center>


<script type="text/javascript">
$(document).ready(function(){

window.sharejobs = function(shareid){
			
			
			var sharelogo= $("#shareimage" +shareid).val();
			if (sharelogo=='')
			{
				var sharelogo= $("#sharenoimage").val();
			}
			
			var sharecaption=$("#sharecaption" +shareid).val();
			var sharename=$("#sharename" +shareid).val();
			var sharedescription=$("#sharedescription" +shareid).val();
FB.ui(
{
method: 'feed',
name: sharecaption,
link: 'http://jobsenq.com',
picture: sharelogo,
caption: sharename,
description: sharedescription,
message: ''

},
  function(response) {
    if (response && response.post_id) {
    	 $.ajax({
				type:"post",
				url:"<?php echo $site?>/admin/admin/jobshares",
				data:{shareid:shareid},
				success:function(data){
					
					//alert(data);
				
				
                        
                }
				
                 });
				 	
    } 
	
  });
}
});

</script>
        
        
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!--=========================for fb link=======================-->
        
        
        </div>
          </div>
          
        </div>
        
        <!--inside row closed-->
         <!--<a href="[~$site~]/jobsenq/jobapplicants/[~$latestPostedJobs[i]->id~]"> <button type="button"  class="btn btn-primary sendbtn">View Applicants</button></a>-->
      
     <!--<a href="[~$site~]/jobsenq/editjobs/[~$latestPostedJobs[i]->id~]"><button type="button" class="btn btn-primary  sendbtn">Edit the Job</button></a>-->
     
     
    <!-- <a href="" class="profile-a removejb"  data-toggle="modal" data-jobid="[~$latestPostedJobs[i]->id~]" data-target=".removejob"><button type="button" id="" class="btn btn-primary sendbtn" >Remove the Job</button></a>-->
   <!--<button type="button" class="btn btn-primary  sendbtn sweet-14" onClick="_gaq.push(['_trackEvent', 'example, 'try', 'Danger']);">Remove the Job</button>-->
 
      
      
      
      
      
      
      
      
      </div>
      
       <?php $j=$j+1;}?>

      <!--/First Jobs-->
      
          

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    </div>
 
  </div>
  
 
  
</div>





<?php include "footer.php" ?>

      
	
