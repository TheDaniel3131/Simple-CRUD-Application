<?php 
// echo"Create"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo base_url('img/codeigniter_icon.svg'); ?>">
	<title>Simple CRUD Application Using CodeIgniter 3.0 | Create New User</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
</head>
<body>
<style>
	body
	{

	margin: 0;
	padding: 0;
	font-family: 'Poppins';

	}

	*
	{
		box-sizing: border-box;
	}

	.table
	{

		width: 100%;
		border-collapse: collapse;

	}

	.table thead{
		line-height: 1.5em;
	}


	/* Responsive Website */

	@media (max-width: 768px) {
		#btnANU span{
	/*		display: none;*/
		}

		#btnANU{
			/*visibility: hidden;*/
		}

		#btnANU{
			/*visibility: visible;*/
	/*		display: block;*/
			
			text-align: right;
		
			width: auto;
			left: 0;
		
			padding: 2px;
			font-size: 0.85em;

		}


	}

	@media (max-width: 1000px) {

		#sCRUD{
			display: none;
		}

		#txtUD{
			text-align: left;

		}

		#btnANU{
			text-align: center;
			left: 25%;
			width: auto;
			margin-left: 500px;
			padding: 8px;

		
	}




</style>
<section>
	<div class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<img src="<?php echo base_url('img/codeigniter.png'); ?>" alt="CodeIgniter Logo" width="200px" height="auto">
			<a href="#" class="navbar-brand"><b>Simple Create, Read, Update and Delete Application</b></a>
		</div>
	</div>
	<div class="container" style="padding-top: 30px;">
		<h3><b><u>Add New User</u></b></h3>
		<hr>
		<form name="createNewUser" method="post" action="<?php echo base_url().'index.php/user/create';?>">
			<div class="row">
				<!-- <div class="col-md-12"> -->
				<div class="col-md-6">
					<div class="form-group">
						<label for="">User Name:</label>
						<input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control" placeholder="Enter User Name Here" required>
						<?php echo form_error('name');?>
					</div>	
					<br>
					<div class="form-group">
						<label for="">Age:</label>
						<input type="number" name="age" value="<?php echo set_value('age')?>" class="form-control" placeholder="Enter Age Here" required>
						<?php echo form_error('age');?>
					</div>	
					<br>
					<div class="form-group">
						<label for="">Email:</label>
						<input type="text" name="email" value="<?php echo set_value('email')?>" class="form-control" placeholder="Enter Email Here" required>
						<?php echo form_error('email');?>
					</div>
					<br>
					<div class="form-group">
						<label>Phone Number:</label>
						<input type="text" name="phone" value="<?php echo set_value('phone');?>" class="form-control" placeholder="Enter Phone Number Here" required>
						<?php echo form_error('phone');?>
					</div>
					<br>
					<div class="form-group">
						<label>Home Address:</label>
						<input type="text" name="address" value="<?php echo set_value('address');?>" class="form-control" placeholder="Enter Home Address Here" required>
						<?php echo form_error('address');?>
					</div>					
					<br>
					<div class="form-group">
						<button class="btn btn-primary">Create</button> 
						&nbsp;
						<a href="<?php echo base_url().'index.php/user/index';?>"class="btn btn-secondary">Cancel</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
</body>
</html>