<?php include_once('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Purple Bug</title>
</head>
<body>
<a class="btn btn-primary active" href="<?php echo('purplebug/add_appointment'); ?>">ADD APPOINTMENT</a>

<div class="container">
<h2 style="color:red">Appointments</h2>
<div class="table-responsive">
	<table class="table table-hover table-condensed">
		<thead>
			<tr>
				<td>Date</td>
				<td>Title</td>
				<td>Description</td>
				<td>Duration</td>
				<td>Color</td>
				<td>Timeslot</td>

			</tr>
		</thead>

		<tbody>
		<?php foreach ($data as $row) { ?>

			<tr>
				<td><?php echo $row->date . "<br>"; ?></td>
				<td><?php echo $row->title . "<br>"; ?></td>
				<td><?php echo $row->description . "<br>"; ?></td>
				<td><?php echo $row->duration . "<br>"; ?></td>
				<td><input name="clr" disabled="true"  type="color" value="<?php echo $row->color; ?>"></td>
				<td><?php echo $row->timeslot . "<br>"; ?></td>

			</tr>

			 
			<?php 
			} ?>
		</tbody>

	</table>
	<h2 style="color:red">Daily Planner</h2>
	<div class="container-fluid">	
		<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<td>Date</td>
					<td>Time Slot</td>
					<td>9AM|2PM</td>
					<td>10AM|3PM</td>
					<td>11AM|4AM</td>
					<td>12NN|5PM</td>
					</div>
				</tr>

			</thead>

			</div>
			<?php foreach ($data as $row) { ?>
			
			
			<tbody>
				<tr>
					<td><?php echo $row->date . "<br>"; ?></td>
					<td><?php echo $row->timeslot . "<br>"; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		</div>
	</div>
</body>
</html>