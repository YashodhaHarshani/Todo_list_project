<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create New</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asserts/lib/bootstrap/css/bootstrap.css"); ?>">
	<script type="text/javascript" src="<?php echo base_url("asserts/lib/jquery/jquery-3.3.1.min.js"); ?>"></script>

	<script type="text/javascript" src="<?php echo base_url("asserts/lib/DataTables/datatables.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("asserts/lib/highchart/highcharts.js"); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asserts/lib/DataTables/datatables.min.css"); ?>"> 

	<script type="text/javascript" src="<?php echo base_url("asserts/lib/DataTables/responsive/dataTables.fixedHeader.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("asserts/lib/DataTables/responsive/dataTables.responsive.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("asserts/lib/DataTables/responsive/responsive.bootstrap.min.js"); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asserts/lib/DataTables/responsive/fixedHeader.bootstrap.min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asserts/lib/DataTables/responsive/responsive.bootstrap.min.css"); ?>">
	<link rel="stylesheet"  href="<?php echo base_url('asserts/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("asserts/css/layout_style.css"); ?>">
</head>
<body>
	<div class="container" align="center">
		<div class="container sub-header">
			<h4>Create New TODO Item</h4>
		</div>

		<?php echo form_open(); ?>

		<?php echo form_input("task", set_value('task'), array("placeholder" => "Task*"))?> 
		<div class="error_message" align="center">
			<?php echo form_error("task"); ?>
		</div>
		<br>
		<select name="status" id="selectbox" class="form-control input-lg"> 

			<option value="">Status</option>

			<option value="Completed">Completed</option>

			<option value="In Progress">In Progress</option>

			<option value="Not Started">Not Started</option>

		</select><br>
		<div class="error_message" align="center">
			<?php echo form_error("status"); ?>
		</div>


		<button type="submit" class="btn btn-secondary"><b>SAVE</b></button>

		<?PHP echo form_close(); ?>
	</div>

</body>
</html>