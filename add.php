<?php 
include ('db.php');
if (isset($_POST['submit'])) {

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$email = $_POST['email'];

$sql ="INSERT INTO users (f_name,m_name,l_name,age,email) VALUES ('$fname','$mname','$lname','$age','$email');";


mysqli_query($conn,$sql);
$conn->close();

 header("Location: index.php");
		

}

?>