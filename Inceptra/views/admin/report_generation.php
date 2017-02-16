<?php include("header.php");?>
<?php include "leftsidebar.php" ?>

<div id="page-content">
    <div id='wrap'>
	<div class="col-md-2 col-sm-2"></div>
		<div class="col-md-6 col-sm-4 rpt">
			<div class="rptfrm">
			   <form  id="pref_form" action="viewPdf" method="post">
				   <div class="col-md-3 col-sm-2"><label for="Paid Type" class=" control-label formalign" style="padding-left:5px !important;">Paid type:</label></div>
		            <div class="col-md-6 col-sm-4">
			            <select name="paidtype" class="form-control drop " >
								<option value=""></option>
								<option value="1">1 Moth</option>
								<option value="3">3 Moth</option>
								<option value="6">6 Moth</option>
								<option value="12">1 Year</option>
		                  </select>
		              </div>
		              <div class="col-md-3 col-sm-2"></div><br/><br/><br/>
		              <div class="row">
			              	<div class="col-md-3 col-sm-2"><label for="Duration" class=" control-label formalign" style="padding-left:5px !important;">Duration:</label></div>
			           		 <div class="col-md-3 col-sm-4"><input type="text" name="fromdate" class="form-control drop boxdesign" placeholder="From Date(dd-mm-yyyy)" value=""></div>
			           		 <div class="col-md-3 col-sm-4"><input type="text" name="todate" class="form-control drop boxdesign" placeholder="To Date(dd-mm-yyyy)" value=""></div>
							<div></div>
					</div>
					<div class="row"><center>
						<input type="submit" class="btn  btn_home" value="View PDF" name="submit" style="background-color:#595f69; color: #fff; margin-top: 10px;"/>
					</center></div>
			   </form>
			   </div>
		</div>
		<div class="col-md-2 col-sm-2"></div>
	</div>
</div>
<?php include("footer.php");?>

