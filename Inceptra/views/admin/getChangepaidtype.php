
<?php include("header.php");?>
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
        <form id="fm" method="post" >
			<div class="fitem"><label>Paid Type:</label><select name="PaidType">
				<option value="1">1 Month</option>
                <option value="3">3 Months</option>
                <option value="6">6 Months</option>
                <option value="12">1 Year</option>
          </select></div>
           <div>     <label>Starting Date:</label><input name="StartDate" class="easyui-validatebox" required="true" placeholder="yyyy-mm-dd"></div>
               <div> <label>End Date:</label><input name="EndDate" class="easyui-validatebox" required="true" placeholder="yyyy-mm-dd"></div>
			
			<div><input type="submit" name="Save" value="Save"></div>
		</form>
         </div>
    </div><!--Wrap-->
</div><!--Page-content-->

<?php include("footer.php");?>
<html>
<head></head>
<body>
</body>
</html>