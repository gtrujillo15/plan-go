<?php  
 require('db_connect.php');

if (isset($_POST['email']) and isset($_POST['password']) and isset($_POST['confirmpassword'])){
	
// Assigning POST values to variables.
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpass = $_POST['confirmpassword'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>