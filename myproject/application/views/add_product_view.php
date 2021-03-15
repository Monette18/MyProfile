<!DOCTYPE html>
<html>
<head>
	<title>Add New Product</title>
	<!--  load  bootstrap  css  file  -->
	
	<link href= "<?php echo base_url('asset/css/styles.css');?>" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1><center>Add New Product</center></h1>
		<div class="col-md-6  offset-md-3">
			<form  action="<?php echo site_url('product/save');?>" method="post">
				<div class="form-group"> <label>Product Name</label> 
					<input  type="text" class="form-control"name="product_name" placeholder="Product Name">
				</div> 
				<div class="form-group"> 
					<label>Price</label> 
					<input type="text" class="form-control" name="product_price" placeholder="Price"> 
				</div> 
				<button type="submit" class="btn  btnprimary">Submit</button> 
			</form> 
			</div> 
		</div> 

		<!--  load  jquery  js  file  --> 
		<script  src="<?php echo base_url('assets/js/jquery.min.js');?>"> </script> 
		<!--  load  bootstrap  js  file  --> 
		<script  src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
		
</body> 
</html>