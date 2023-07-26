
<?php include "DBMS.php"; ?>

<!DOCTYPE html>
<html>
<head>
   <style>
body {
  background-image: url('cu clg.jpg');
  background-size: cover;
}
</style>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<title >collega web</title>
</head>
<body>

   <img src="cu-logo.png" alt="cu" width="200" height="80">
       <hr>
       <form action="Login.php"method="POST">
       <div class="container">
       <div class="title">Registration Form
        </div>

    <div class="Form">
    	<div class="input_field">
    		<label>First name:</label>
       <input type="text"  class="input" name="fn" required>
    </div>

    <div class="input_field">
    	<label>Last name:</label>
       <input type="text"  class="input" name="ln" required>
    </div>

    <div class="input_field">
    	<label>E-mail:</label>
       <input type="email"  class="input" name="E-mail" required>
    </div>

    <div class="input_field">
    	<label>Contact Number:</label>
       <input type="contact Number"  class="input" name="con_number" required>
    </div>
 
    <div class="input_field">
    	<label>DOB:</label>
       <input type="Date" placeholder="Date of birth" class="input" name="dob" required>
    </div>

     <div class="input_field">
     	<label>Password:</label>
       <input type="password"  class="input" name="password" required>
    </div>

    <div class="input_field">
    	<label>Confirm Password:</label>
       <input type=" confirm password" class="input" name="c_password" required>
    </div>

    <div class="input_field">
       <label>Gender</label>
       <select class="selectbox" name="Gender" required>
       <option value="">select</option>
       <option value="Male">Male</option>
       <option value="Female">Female</option>
       <option value="Other">Other</option>
       </select>
    </div>

    <div class="input_field">
    <label>Address:</label>
    <textarea class="textarea" name="Address" required></textarea><br>
 </div>
   <div class="input_field">
    <input type="submit" value="Register" class="btr" name="submit" ><br><br> 	
   </div>
   <div class="login">
      <a href="Login.php"class="link">Login Here</a>
      <style>
         a{
            margin-left:45% ;
            text-decoration: none;
         }
         
      </style>
      
   </div>

    	
    </div>	
    </div>

  
 </div>
</form>
</body>
</html>

<?php 

  if(isset($_POST["submit"]))
  {

   $Fname      = $_POST['fn'];
   $Lastname   = $_POST['ln'];   
   $Email      = $_POST['E-mail'];
   $con_number = $_POST['con_number'];
   $dob        = $_POST['dob'];
   $password   = $_POST['password'];
   $c_password = $_POST['c_password'];
   $Gender     = $_POST['Gender'];
   $Address    = $_POST['Address'];

   $query = "INSERT INTO collega values('','$Fname','$Lastname','$Email','$con_number','$dob','$password','$c_password','$Gender','$Address','')";
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