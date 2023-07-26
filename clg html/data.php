<?php
session_start();
?>
<html>
<head>
	<!-----------------------------------home page header------------------------------------------->
	<link rel="stylesheet" type="text/css" href="Registration Data.css">
	<title>Registration Data</title>
	<body>
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
		
	<!-------------------------------- -- ------------------------------------------------------>
	<style>
		body
		{
			 background-image: url('cu-1.jpg.jpeg');
             background-size: cover;
		}

		table
		{
			background-color: white;
		}
	</style>
</head>
<?php
include("DBMS.php");

$query = mysqli_query($conn,"select * from collega");

?>
<h1 align="center"><br>Registration Data</h1>
<br><br><br>
<style>
	<h1><h1>

 table {

  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: white;
}

</style>
<input type="text" class="search" placeholder="Search...">
<style>
	.search{
	display: flex;
	height: 40px;
	width: 600px;
	border: 3px solid grey;
	border-radius: 100px;
	justify-content: center;
	align-items: center;
	font-size: 20px;
	margin-left: 450px;
	margin-bottom: 25px;
	text-align: center;

}
</style>
<center><table>
	<tr>
		<th>ID</th>
		<th>first Name</th>
		<th>last Name</th>
		<th>email</th>
		<th>contake number</th>
		<th>DOB</th> 
		<th>Gender</th>
		<th>address</th>

		

		

	</tr>
	<?php

	while ($row = mysqli_fetch_array($query)) 
	{
	?>
	
	<tr>
     
     <td><?php echo $row['ID']; ?></td>
		<td><?php echo $row['fname']; ?></td>
		<td><?php echo $row['Lname']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['con']; ?></td>
		<td><?php echo $row['DOb']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['add']; ?></td>
		
	</tr>
		
	<?php }
	?>
</center></table>
</body>
</head>