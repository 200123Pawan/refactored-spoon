 <?php
 session_start(); 
 ?>
 <!DOCTYPE html>
<html>
<head> <style>
body {
  background-image: url('cu clg.jpg');
  background-size: cover;
}
</style>
	<link rel="stylesheet" type="text/css" href="login-style.css">
	<title>Login</title>
</head>
<body>

	<img src=" cu-logo.png" alt="cu" width="200" height="80" margin="10px,10px"><hr>
	<div class="content">
	<h1>Login</h1>
	<form action="#" method="post">
<div class="form">

	<input type="text" name="Username" class="textfiled" placeholder="Username" autocomplete="off">
		<input type="password" name="password" class="textfiled" placeholder="password"><br>
		<input type="submit" name="Login" value="Login" class="btn">
      <div class="signup">New Member ?<a href="form.php" class="link">signup Here </a> 
      	
      </div>
</div>

</div>
</form>
</body>
</html>
<?php 
include("DBMS.php");

if(isset($_POST['Login']))
{
	$Username =$_POST['Username'];
	$pwd =$_POST['password'];
	

	$query = "SELECT * FROM collega where fname = '$Username' && pwd = '$pwd' ";
	$data = mysqli_query($conn, $query);

	$total = mysqli_num_rows($data);
	if($total == 1)
    {
         echo "Login ok";
    	$_SESSION['user_name'] = $Username;

    	header('location:HOME page.php');

	}
	else
	{
		echo "Login failed";
	}

}


?>
<!------------------------------------------------------------------------>

<?php include "DBMS.php"; ?>

<?php 

  if(isset($_POST["Login"]))
  {

   $user_mail = $_POST['Username'];
   $pwd   = $_POST['password'];
   
   

   $query = "INSERT INTO logingdata values('','$user_mail','$pwd')";
   $data = mysqli_query($conn, $query);
if($data)
	 {
      echo "canection is ok";
   }
   else
   {
      echo "failed";
   }
}
?>