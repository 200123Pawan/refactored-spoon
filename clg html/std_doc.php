 <?php
 session_start(); 
 ?>
<?php
 include("DBMS.php");

 $usrtable ="collega";
 $columnname ="fname";
 

mysqli_connect($servername,$username,$password) or die("unable to connect the dbase");
$query = "SELECT * FROM  $usrtable";
$result =mysqli_query($conn,$query);
?>

<?php

include("DBMS.php");
$qry="SELECT * FROM logingdata";
$result1=mysqli_query($conn,$qry);
while ($row=mysqli_fetch_array($result1)){
     $sID=$row["uid"];
}
?>

<html>
<head>
	<style>
body {
  background-image: url('cu clg.jpg');
  background-size: cover;
}

</style>
<!---------------------------------------------------------------------------------------->
<div class="wrapper">
   	<img src="cu-logo.png" alt="cu" width="150" height="50">
	<ul>
		<li><a href="HOME page.php">Home</a></li>
		<li><a href="#">inbox</a></li>

		<li><a href="std_doc.php">Flie sharing <i class="fas fa-caret-down "></i></a>
			<div class="dropdown">			
			<ul>
				<li><a href="Doc_display.php">sharing Data</a></li>
			</ul>
		    </div>
		</li>
		<li><a href="data.php">Registation Data</a></li>	
		<a href="logout.php"> <input type="submit" name="" value="Logout" style="background: blue; color: white; height: 25px; width: 90px; margin-top: 10px;margin-left: 10px;  font-size: 18px; border: 0; border-radius: 5px; cursor:pointer ;"></a>

		 	
   </ul>
</div>
<!---------------------------------------------------------------------------------------->	 
	     
		  <link rel="stylesheet" type="text/css" href="style std_doc.css">
          <title>upload file</title>
        
</head>
<body>


	
	<div class="content">	
	<h1>File uploading</h1>
	<form action="" method="post" enctype="multipart/form-data">

	<div class="form">
		<input type="hiddens" name="uid" value="<?php echo  $sID;?>">
	<label for="Use">Username/ID: </label>
     <select name="Username" class ="Use">
		<option>---select name!---</option>
			<?php 
			if($result)
			{
				while ($row=mysqli_fetch_array($result))
				 {
				 	$fname=$row["$columnname"];
				 		
       	echo"<option>$fname<br></option>";

					
				}
			}
			?>
		
     </select>
		
		<input type="file"  class="input" name="doc[]" required><br><br>
		<button type="submit" value="upload file(s)" name="submit" class="btn">file share</button>
	</div>


</div>
</form>

</body>
</html>
<?php 
include("DBMS.php");
if(isset($_POST['submit']))
{

 foreach ($_FILES['doc']['name'] as $key => $val) 
 {
 	$Username  = $_POST['Username'];
 	$radom = rand('1111','9999');
 	$dp = $radom.'_'.$val;
 	move_uploaded_file($_FILES['doc']['tmp_name'][$key],'s_doc/'.$dp);
 $uid  = $_POST['uid'];




 	$query = "INSERT INTO std_img values('','$Username','$uid','$dp','')";
 	$data = mysqli_query($conn,$query);
   

 	if($data)
 	{
 		
 		 echo "<div class='alert-danger' role='alert'>
 		 <h4 class='text-center'>image upload</h4>";

 	}
 	else
 	{
 		echo "<div class='alert-danger' role='alert'>
 		 <h4 class='text-center'>image upload</h4>";

 	}
}
  
}


?>
