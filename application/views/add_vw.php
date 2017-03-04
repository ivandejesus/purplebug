<?php include_once('header.php'); ?>

<div class="container">
<?=form_open('purplebug/add_appoint');?>
	<div class="form-group">          
    Date: <input required class="form-control input-sm" type="date" name="date"><br>
	Title: <input required class="form-control" type="text" name="title"><br>
	Description: <input required class="form-control input-sm" type="text" name="description"><br>
	Duration: <input required class="form-control input-sm" type="text" name="duration"><br>
	Color: <input required class="form-control input-lrg" type="color" name="color"><br>
	<div class="form-group">
	<label for="sel1">Timeslot:</label></label> 
	<select required class="form-control" name="timeslot">
		<option name="option_am">AM</option>	
		<option name="option_pm">PM</option>
	</select> <br>
	</div>
	</div>
	<div class="btn btn-primary active">
	<input type="submit" name="btnADD" value="ADD">
	</div>
</div>	
<?php echo form_close();  ?>

                