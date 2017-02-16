<?php include "header.php" ?>
<?php include "leftsidebar.php" ?>
 <!--<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
        <!-- Ionicons -->
       <!-- <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />-->
<link href="<?php echo $base;?>/adminassets/css/ionicons.css" rel="stylesheet" type="text/css" />
<div id="page-content">
	<div id='wrap'>




 <!-- Main content -->
                <section class="content">
                    <h4 class="page-header">
                        Dashboard Control Panel
                        <small>Small Description about JobsEnq.com.</small>
                    </h4>
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php echo $employers ?>
                                    </h3>
                                    <p>
                                        Employer
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-university"></i>
                                </div>
                                <a href="<?php echo $site;?>/admin/admin/loadEmployers" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?php echo $jobseeker ?><!--<sup style="font-size: 20px">%</sup>-->
                                    </h3>
                                    <p>
                                        Jobseekers
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person"></i>
                                </div>
                                <a href="<?php echo $site;?>/admin/admin/loadJobseekers" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php echo $freelancer ?>
                                    </h3>
                                    <p>
                                        Freelancers
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person"></i>
                                </div>
                                <a href="<?php echo $site;?>/admin/admin/loadFreelancer" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php echo $serviceprovider?>
                                    </h3>
                                    <p>
                                        Service Providers
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-android-contacts"></i>
                                </div>
                                <a href="<?php echo $site;?>/admin/admin/loadServiceprovider" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>
                                        <?php echo $services?>
                                    </h3>
                                    <p>
                                        Active Services
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-settings"></i>
                                </div>
                                <a href="<?php echo $site;?>/admin/admin/loadActiveServices" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3>
                                        <?php echo $activejobs ?><!--<sup style="font-size: 20px">%</sup>-->
                                    </h3>
                                    <p>
                                        Active Jobs
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-briefcase"></i>
                                </div>
                                <a href="<?php echo $site;?>/admin/admin/loadActiveJobs" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-teal">
                                <div class="inner">
                                    <h3>
                                        <?php echo $totalusers ?>
                                    </h3>
                                    <p>
                                        Total Users
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-stalker"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-maroon">
                                <div class="inner">
                                    <h3>
                                        <?php echo $expiredjobs ?>
                                    </h3>
                                    <p>
                                        Expired Jobs
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-sad"></i>
                                </div>
                                <a href="<?php echo $site;?>/admin/admin/loadExpiredJobs" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
                    
                    
                    
                    
                    
                    
                    
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-navy">
                                <div class="inner">
                                    <h3>
                                        <?php echo $onlineusers ?>
                                    </h3>
                                    <p>
                                        Online Users
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="<?php echo $site;?>/admin/admin/loadOnlineUsers" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-olive">
                                <div class="inner">
                                    <h3>
                                        <?php echo $dailyvistors ?><!--<sup style="font-size: 20px">%</sup>-->
                                    </h3>
                                    <p>
                                        Daily Vistors
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="<?php echo $site;?>/admin/admin/loadDailyVistor" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-lime">
                                <div class="inner">
                                    <h3>
                                        <?php echo $totalvistors ?>
                                    </h3>
                                    <p>
                                        Page Views
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-earth"></i>
                                </div>
                                <a href="<?php echo $site;?>/admin/admin/loadTotalVistor" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-orange">
                                <div class="inner">
                                    <h3>
                                        <?php echo $feedback ?>
                                    </h3>
                                    <p>
                                        Feedbacks
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-archive"></i>
                                </div>
                                <a href="<?php echo $site;?>/admin/admin/getFeedback" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                   
  </section>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   
<?php include "footer.php" ?>