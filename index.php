<?php include ('header.php')?>
<?php include ('db.php') ?>
<html>
<body>

		<form method="POST" id="index" action="add.php">
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="fname">First Name</label>
					<input class="form-control" name="fname" value="">
				</div>
				<div class="form-group col-md-4">
					<label for="mname">Middle Name</label>
					<input class="form-control" name="mname" value="" >
				</div>
				<div class="form-group col-md-4">
					<label for="lname">Last Name</label>
					<input class="form-control" name="lname" value="">
				</div>
				<div class="form-group col-md-2">
					<label for="age">Age</label>
					<input class="form-control" name="age" value="">
				</div>
				<div class="form-group col-md-4">
					<label for="email">Email</label>
					<input class="form-control" type="email" name="email" value="">
				</div>
			</div>

			<button type="submit" class="btn btn-primary" name="submit" >Add</button>		
		</form>
    

<table class="table"id="master_table">
  <thead>
    <tr>
      <th>#</th>
	  <th>First Name</th>
	  <th>Middle Name</th>
	  <th>Last Name</th>
	  <th>Age</th>
	  <th>Email</th>
	  <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  	<?php  

  		$sql = "SELECT * FROM users";
  		$result = mysqli_query($conn,$sql);

  		if (mysqli_num_rows($result)>0) {
 

  		  while ($row = $result->fetch_assoc()) {
  				
  	 ?>
	 <tr>
      <td><?php echo $row['id']; ?></td> 
      <td><?php echo $row['f_name']; ?></td>
      <td><?php echo $row['m_name']; ?></td>
      <td><?php echo $row['l_name']; ?></td>
      <td><?php echo $row['age']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td>


      	<a type="button" name="edit" class="btn btn-outline-success" href="edit.php?id=<?php echo $row['id'];?>"> Edit </a>
      	<a type="button" class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>" > Delete </a>
       </td>
    </tr>
    <?php } } else { ?>
    	<tr>
    		<td colspan="6"> No Records Found</td>
    	</tr>
    <?php  } ?>
  </tbody>
</table>

</body>

</html>