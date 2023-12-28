<?php 
// echo"Create"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php echo base_url('img/codeigniter_icon.svg'); ?>">
	<title>Simple CRUD Application Using CodeIgniter 3.0 | View Users</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">

	<!-- Font Awesome V5.0-->
	<script src="https://kit.fontawesome.com/5a3777daa8.js" crossorigin="anonymous"></script>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

	<!-- External CSS files-->
	<!-- <link rel="stylesheet" href="assets/style.css"> -->


</head>
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

	#btnANU{
		text-align: center;
		align-items: center;
		justify-content: center;
		display: inline-flex;

		left: 0;
		width: auto;
		margin-left: 0px;
		padding: 8px;
	}

	@media only screen and (max-width: 768px){

		table tr{
			margin-top: 20px;
			padding-top: 55px;
		}



		#btnANU{
			display: none;
			text-align: center;
			left: 0;
			width: 150px;
			margin-left: 0px;
			padding: 8px;

		}


		.table tbody tr td{
			justify-content: right;
			align-items: right;
			text-align: right;
			padding-left: 35%;
			width: 100%;
			white-space: nowrap;
			position: relative;
		}


		.table tbody tr:second-child(2) td:nth-child(6){
			display: none;
		}


	}


	@media (max-width: 1000px) {

		table tr{
			margin-top: 20px;
			padding-top: 55px;
		}


		#sCRUD{
			display: none;
		}

		#txtUD{
			text-align: left;

		}

		#btnANU{
			text-align: center;
			left: 25%;
			width: 150px;
			margin-left: 450px;
			padding: 8px;

		}

		.table {

		}

		.table thead{
			display: none;
		}


		.table, .table tbody, .table tr, .table td{
			display: block;
			width: 100%;
			justify-content: center;
		}

		.table tr{
			margin-bottom: 15px;
		}

		.table tbody tr td{
			text-align: right;
			padding-left: 5%;
			position: relative;
		}

		.table td:before{
			content: attr(data-label);
			width: 15%;
			position: absolute;
			left: 0;
			padding-left: 0px;
			font-weight: 600;
			font-size: 14px;
			text-align: left;
		}
		
	}




</style>
<body>

<section>
	<div class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a href="<?php echo base_url().'index.php/user/index'; ?>"><img src="<?php echo base_url('img/codeigniter.png'); ?>" alt="CodeIgniter Logo" width="200px" height="auto"></a>
			<a href="<?php echo base_url().'index.php/user/index'; ?>" id="sCRUD" class="navbar-brand"><b>Simple Create, Read, Update and Delete Application</b></a>
		</div>
	</div>

	<div class="container" style="padding-top: 25px;">
		<div class="row">
			<div class="col-md-12">
				<?php 
				$success = $this->session->userdata('success');
				if($success != ""){				
				?>
				<div class="alert alert-success"><?php echo $success;?></div><br>
				<?php
				}
				?>

				<?php 
				$failure = $this->session->userdata('failure');
				if($failure != ""){

				
				?>
				<div class="alert alert-success"><?php echo $failure;?></div><br>
				<?php
				}
				?>

			</div>
		</div>

		<div class="row">
			<div class="col-xl-12 text-center" style="margin-top: 5px;">
				<div class="row">
					<div id="txtUD" style="text-align: center; justify-content: center; align-items: center;" class="#"><h3><b><u>Users Data</u></b></h3></div>		
				</div>
				<hr>
			</div>
		</div>

		<div class="col-md-0 text-center" style="margin-top: 15px;">
			<a href="<?php echo base_url().'index.php/user/create'; ?>" id="btnANU" class="btn btn-primary"><span>Add New User</span></a>
		</div>	

		<div class="row" style="margin-top: 25px;">
			<div class="col-md-12">

				<table id="datatable1" class="table table-stripped" >

					<thead class="thead-dark">
	
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Age</th>
							<th>Email</th>
							<th width="180">Phone Number</th>
							<th width="280">Home Address</th>

							<th width="80">Edit</th>
							<th width="102">Delete</th>


						</tr>
					</thead>

					<tbody>

						<?php if(!empty($users)) { foreach($users as $user) {?>

						<tr>
							<td data-label="User ID"><?php echo $user['user_id']?></td>
							<td data-label="Name"><?php echo $user['name']?></td>
							<td data-label="Age"><?php echo $user['age']?></td>
							<td data-label="Email"><?php echo $user['email']?></td>
							<td data-label="Phone"><?php echo $user['phone']?></td>
							<td data-label="Address"><?php echo $user['address']?></td>
							<!-- &nbsp; -->
							<td>
								<a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>" class="btn btn-primary">Edit</a>
							</td>
							<td>
								<a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class="btn btn-danger ">Delete</a>
							</td>

						</tr>
						<?php } } else{?>
							<tr>
								<td colspan="5">Records Not Found</td>
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>


<!-- JQuery--> 
<!-- <script src="jquery-3.5.1.js"></script>
<script src="jquery.dataTables.min.js"></script> -->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready( function () {
	    $('#datatable1').DataTable();
	} );	
</script>

</body>
</html>