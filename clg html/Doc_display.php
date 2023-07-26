
<html>
<head>
	
	<title>file Display</title>
	<link rel="stylesheet" type="text/css" href="Doc_display.css">
</head>
<body>
	<!----------------------------------home page header---------------------------------------------->
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
<!---------------------------------------------------------------------------------------------------->
	<style >
 body
 {
 	background-image: url('cu-1.jpg.jpeg');
             background-size: cover;
}
 table
 {
  background-color: white ;
 }
</style>
</body>
</html>
<?php
 include('DBMS.php');
 error_reporting(0);
$query = mysqli_query($conn,"SELECT * FROM std_img ORDER BY ID DESC");

?>
<h1 align="center"><br>File Uploading Data</h1>
<br><br><br>
<style>
	<h1><h1>

 table {

  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 200%;
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
<center><table>
	<tr>
		<th>ID</th>
		<th>share-from</th>
		<th>Username-TO</th>
		<th>img_doc</th>
				<th>Date-Time</th>

	</tr>
	<?php

	while ($row = mysqli_fetch_array($query))
			
		
	{
	?>
	
	
	<tr>
		<td><?php echo $row['ID']; ?></td>
		<td><?php echo $row['uid']; ?></td>
		<td><?php echo $row['Username']; ?></td>
    <td><?php echo $row['img_doc']; ?></td>
    <td><?php echo $row['timedate']; ?></td>
		<td><a href="Download.php?ID ='<?php echo $row['ID']; ?>"><button class="btn">Download</button></a></td>
	</tr>

	
<?php }
?>
</table>
	
</center>