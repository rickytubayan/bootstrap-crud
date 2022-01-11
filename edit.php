<?php include ('header.php'); ?>
<?php include ('db.php'); ?>
<?php

	
	$id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE id = $id";
	$result = mysqli_query($conn,$sql);

	while ($row = $result->fetch_assoc()) {
	 
?>
<form method="POST" action="update.php">
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="fname">First Name</label>
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<input class="form-control" name="fname" value="<?php echo $row['f_name']; ?>">
				</div>
				<div class="form-group col-md-4">
					<label for="mname">Middle Name</label>
					<input class="form-control" name="mname" value="<?php echo $row['m_name']; ?>" >
				</div>
				<div class="form-group col-md-4">
					<label for="lname">Last Name</label>
					<input class="form-control" name="lname" value="<?php echo $row['l_name']; ?>">
				</div>
				<div class="form-group col-md-2">
					<label for="age">Age</label>
					<input class="form-control" name="age" value="<?php echo $row['age']; ?>">
				</div>
				<div class="form-group col-md-4">
					<label for="email">Email</label>
					<input class="form-control" type="email" name="email" value="<?php echo $row['email']; ?>">
				</div>
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Update</button>
	<?php } ?>
</form>



      

     