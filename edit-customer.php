
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	$pid=intval($_GET['id']);// product id
if(isset($_POST['submit']))
{
	$fullname=$_POST['fullname'];
	$phone=$_POST['phone'];
    $sector=$_POST['sector'];
    $cell=$_POST['cell'];
    $village=$_POST['village'];
    $money_taker=$_POST['money_taker'];
    $date_of_pay=$_POST['date_of_pay'];
	
$sql=mysqli_query($con,"update customers set fullname='$fullname',phone='$phone',sector='$sector',cell='$cell',village='$village',money_taker='$money_taker',date_of_pay='$date_of_pay' where id='$pid' ");
$_SESSION['msg']="Customer Updated Successfully !!";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Baheza | Update Customer</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

   <script>
function getSubcat(val) {
	$.ajax({
	type: "POST",
	url: "get_subcat.php",
	data:'cat_id='+val,
	success: function(data){
		$("#subcategory").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	


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
							<div class="module-head">
								<h3>Change Customer Information</h3>
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

<?php 

$query=mysqli_query($con,"select * from customers where customers.id='$pid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  


?>

<div class="control-group">
<label class="control-label" for="basicinput">Customer Names</label>
<div class="controls">
<input type="text" name="fullname"  placeholder="Enter Customer Names" value="<?php echo htmlentities($row['fullname']);?>" class="span8 tip" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Customer Phone Number</label>
<div class="controls">
<input type="text" name="phone" placeholder="Enter Customer Phone Number" value="<?php echo htmlentities($row['phone']);?>" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Sector</label>
<div class="controls">
<input type="text" name="sector" placeholder="Enter Sector" value="<?php echo htmlentities($row['sector']);?>"  class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Cell</label>
<div class="controls">
<input type="text" name="cell" placeholder="Enter Cell" value="<?php echo htmlentities($row['cell']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Village</label>
<div class="controls">
<input type="text" name="village" placeholder="Enter Village" value="<?php echo htmlentities($row['village']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Uwiyishyuza</label>
<div class="controls">
<input type="text" name="money_taker"  placeholder="Enter Money Taker" value="<?php echo htmlentities($row['money_taker']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Date Of Page</label>
<div class="controls">
<input type="datetime-local" name="date_of_pay" value="<?php echo htmlentities($row['date_of_pay']);?>" class="span8 tip" required>
</div>
</div>

<?php } ?>
	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Update</button>
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