<?php include "header.php" ?>
<div id="page-content">
	<div id='wrap'>
	
<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file):?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>



	<!--<div>
		<a href='<?php echo site_url('examples/customers_management')?>'>Customers</a> |
		<a href='<?php echo site_url('examples/orders_management')?>'>Orders</a> |
		<a href='<?php echo site_url('examples/products_management')?>'>Products</a> |
		<a href='<?php echo site_url('examples/offices_management')?>'>Offices</a> | 
		<a href='<?php echo site_url('examples/employees_management')?>'>Employees</a> |		 
		<a href='<?php echo site_url('examples/film_management')?>'>Films</a> | 
		<a href='<?php echo site_url('examples/film_management_twitter_bootstrap')?>'>Twitter Bootstrap Theme [BETA]</a> | 
		<a href='<?php echo site_url('examples/multigrids')?>'>Multigrid [BETA]</a>
		
	</div>-->
	<div style='height:20px;'></div>  
    <div class="container">
		<?php echo $output; ?>
    </div>
</div>
</div>
<?php include "footer.php" ?>