 <?php
 session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home page</title>
	<link rel="stylesheet" href="Home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<?php
include("DBMS.php");
error_reporting(0);
$userprofile = $_SESSION['user_name'];
 if($userprofile == true)
 {

 }
 else
 {
 	header('location:HOME page.php');
 }


 ?>

   <div class="wrapper">
   	<img src="cu-logo.png" alt="cu" width="150" height="50">
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="inbox.php">inbox</a></li>

		<li><a href="std_doc.php">Flie sharing <i class="fas fa-caret-down "></i></a>
			<div class="dropdown">			
			<ul>
				<li><a href="Doc_display.php">sharing Data</a></li>
			</ul>
		    </div>
		</li>
		<li><a href="data.php">Registation Data</a></li>	
		<li><a href="https://www.instagram.com/chandigarhuniversity/">Socail Medai</a></li>
		<a href="logout.php"> <input type="submit" name="" value="Logout" style="background: blue; color: white; height: 25px; width: 90px; margin-top: 10px;margin-left: 10px;  font-size: 18px; border: 0; border-radius: 5px; cursor:pointer ;"></a>
		 	
   </ul>
</div>

</body>
</html>
<?php

include("DBMS.php");
$qry="SELECT * FROM logingdata";
$result1=mysqli_query($conn,$qry);
while ($row=mysqli_fetch_array($result1)){
     $sID=$row["uid"];
}
?>
<p>Employe name:<?php echo  $sID;?></p>
<style>
	p{

		width: 30%;
		margin-top: 15px;
		font-size: 30px;
		color:blue;
		font-style: normal;
		font-family: serif ;

	}
</style>


