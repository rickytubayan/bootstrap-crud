<?php 
	include ('db.php');
if (isset($_POST['submit'])) {

$id = $_POST['id'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$email = $_POST['email'];

$sql ="UPDATE users SET f_name='$fname', m_name='$mname', l_name='$lname', age='$age', email='$email'WHERE id='$id'";

mysqli_query($conn,$sql);
$conn->close();

header("Location: index.php");

}

?>