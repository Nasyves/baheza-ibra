
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Africa/Kigali');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from customers where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Customer deleted !!";
		  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Baheza | Manage Customers</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
	<style type="text/css">
		.table {
			display: grid;
			grid-gap: 10px;
			grid-template-columns: 15% 15% 15% 15% 30%;
			grid-template-rows: 80px 200px 200px;
			border-radius: 10%;
		}
		.one {
			background-color: whitesmoke;
			border-radius: 10%;
		}
		.two {
			background-color: whitesmoke;
			border-radius: 10%;
		}
		.three {
			background-color: whitesmoke;
			border-radius: 10%;
		}
		.four {
			background-color: whitesmoke;
			border-radius: 10%;
		}
		.five {
			background-color: whitesmoke;
			border-radius: 5%;
			grid-row: 1/3;
			grid-column: 5/6;
		}
		.six {
			background-color: whitesmoke;
			border-radius: 5%;
			grid-column: 1/3;
			grid-row: 2/4;
		}
		.seven {
			background-color: whitesmoke;
			border-radius: 5%;
			grid-column: 3/5;
			grid-row: 2/4;
		}
		.eight {
			background-color: whitesmoke;
			border-radius: 5%;
		}
	</style>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

	<div class="module">
							<div class="module-head">
								<h3>Dashboard</h3>
								
							</div>
							<div class="module-body table" style="margin: 0 20px;">
								<div class="one">
									1
								</div>
								<div class="two">
									2
								</div>
								<div class="three">
									3
								</div>
								<div class="four">
									4
								</div>
								<div class="five">
									5
								</div>
								<div class="six">
									6
								</div>
								<div class="seven">
									7
								</div>
								<div class="eight">
									8
								</div>				

					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>