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
          <H2>Pick Up Round</H2>
        </div>
      </div>
      <div class="row borderrows"> </div>
      <div class="row" id="scrolldiv" style="margin:20px;">
        <p style="color: #fff; line-height: 1.5; font-size: 18px; padding-left:25px;">Some general instructions about the exam is provide below please select the category after reading the instruction </p>
        <br>
        <br>
        <div class="row" style="padding:0px 80px;">
          <div class="col-md-3 ">
            <div class="col-md-12 maincontainorstartpr1">
              <div class="circlehaderpr1">
                <h2>World</h2>
              </div>
              <?php if($res[0]->pick1cat =='World'){ ?>
              <input type="button" class="btn btn-primary btnstartnowpr1" disabled value="Completed">
              </a>
              <?php }else { ?>
              <a href="startpuickup2/world">
              <input type="button" class="btn btn-primary btnstartnowpr1" value="Start Now">
              </a>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 maincontainorstartpr2">
              <div class="circlehaderpr2">
                <h2>IT</h2>
              </div>
              <?php if($res[0]->pick1cat =='IT'){ ?>
              <input type="button" class="btn btn-primary btnstartnowpr1" disabled value="Completed">
              </a>
              <?php }else { ?>
              <a href="startpuickup2/it">
              <input type="submit" class="btn btn-primary btnstartnowr2" value="Start Now">
              </a>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="col-md-12 maincontainorstartpr3">
              <div class="circlehaderpr3">
                <h2>Science</h2>
              </div>
              <?php if($res[0]->pick1cat =='Science'){ ?>
              <input type="button" class="btn btn-primary btnstartnowpr1" disabled value="Completed">
              </a>
              <?php }else { ?>
              <a href="startpuickup2/science">
              <input type="submit" class="btn btn-primary btnstartnowpr3" value="Start Now">
              </a>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="col-md-12 maincontainorstartpr4">
              <div class="circlehaderpr4">
                <h2>Entertain<br>
                  -ment</h2>
              </div>
              <?php if($res[0]->pick1cat =='Entertainment'){ ?>
              <input type="button" class="btn btn-primary btnstartnowpr1" disabled value="Completed">
              </a>
              <?php }else { ?>
              <a href="startpuickup2/entertainment">
              <input type="submit" class="btn btn-primary btnstartnowpr4" value="Start Now">
              </a>
              <?php } ?>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
  </div>
</div>
</body>
</html>
