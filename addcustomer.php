
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

    if(isset($_POST['submit']))
    {
		$fullname=$_POST['fullname'];
		$phone=$_POST['phone'];
        $sector=$_POST['sector'];
        $cell=$_POST['cell'];
        $village=$_POST['village'];
        $money_taker=$_POST['money_taker'];
        $date_of_pay=$_POST['date_of_pay'];
    	$sql=mysqli_query($con,"insert into customers(fullname,phone,sector,cell,village,money_taker,date_of_pay) values('$fullname','$phone','$sector','$cell','$village','$money_taker','$date_of_pay')");
    	$_SESSION['msg']="Customer Added Successfully !!";
    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Baheza | Add Cooperative</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>


</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head" style="display: flex;">
								<h3>Add Customer</h3>
								<a href="manage-customers.php" style="display: flex; flex: 1;justify-content: flex-end; border: none; color:black; font-weight: bold; font-size: 1.1em; text-align: center;">Manage Customer</a>
							</div>
                            <div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>
						<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post">
<div class="control-group">
<label class="control-label" for="basicinput">Customer Names</label>
<div class="controls">
<input type="text" name="fullname" placeholder="Enter Customer Names" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Customer Phone Number</label>
<div class="controls">
<input type="text" name="phone" placeholder="Enter Customer Phone Number" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Sector</label>
<div class="controls">
<input type="text" name="sector" placeholder="Enter Sector" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Cell</label>
<div class="controls">
<input type="text" name="cell" placeholder="Enter Cell" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Village</label>
<div class="controls">
<input type="text" name="village" placeholder="Enter Village" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Uwishyuza</label>
<div class="controls">
<input type="text" name="money_taker" placeholder="Enter money Taker" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Date Of Pay</label>
<div class="controls">
<input type="datetime-local" name="date_of_pay" class="span8 tip" required>
</div>
</div>
	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Insert Customer</button>
											</div>
										</div>
									</form>
							</div>
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