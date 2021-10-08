<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Task</title>
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

	<script type="text/javascript">
		$(document).ready(function() {
			$("#Todolist").DataTable();
		})
	</script>
</head>
<body>
	

	<div class="container">
		<div class="row">

			<div class="container sub-header">
				<h4>View ToDo List</h4>
			</div>
			<div class="container">	


				<div class="row">
					<div class="col-md-12">

						<span class=" text-right">
							<a class="btn btn-success" href="<?php echo base_url('/index.php/Task/create')?>">CREATE NEW</a>
						</span>

						<span class=" text-right">
							<a class="btn btn-warning" href="<?php echo base_url('/index.php/Task/clear')?>">CLEAR</a>
						</span>

					</div>
				</div>

				<br><br>

				<div class="row">
					<div class="col-md-12">


						<?php 
						if($this->session->flashdata('success')){
							?>
							<div class="alert alert-success" category="alert">
								<a href="" class="close" data-dismiss="alert">&times;</a>
								<strong>Success!</strong><?php echo $this->session->flashdata('success'); ?>
							</div>
							<?php
						}
						?>



						<hr>

						<table id="Todolist" class="table table-striped table-bordered table-hover table-sm responsive nowrap" width="100%">
							<thead  class="thead-dark">
								<tr>
									<th>ID</th>
									<th>Task</th>
									<th>Created Date</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($task as $key => $value): ?>
									<tr>
										<td><?php echo $value->id; ?></td>
										<td><?php echo $value->task; ?></td>
										<td><?php echo $value->created_date; ?></td>
										<td><?php echo $value->status; ?></td>
										<td align="center">
											<a class='btn btn-sm btn-danger' href='<?php echo base_url("index.php/Task/delete/".$value->id); ?>' onclick="return confirm('Are you sure to remove this task?')">Delete</a>
										</td>

									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>


		</body>
		</html>