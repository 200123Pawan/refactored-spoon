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
	
	<title>file Display</title>
	<link rel="stylesheet" type="text/css" href="Doc_display.css">
</head>
<body>

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
 $query = mysqli_query($conn,"SELECT uid,fname,img_doc,timedate,Username FROM collega  r JOIN std_img i on r.fname= i.uid WHERE fname='$sID'
");
 

?>
<h1 align="center"><br>Share Data</h1>
<br><br><br>
<style>

 table {

  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
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
		
		
		<th>Share-From</th>
		<th>img_doc</th>
		<th>Data-Time</th>


		
	</tr>
	<?php

	while ($row = mysqli_fetch_array($query))
			
		
	{
	?>
	
	
	<tr>
		
		
		<td><?php echo $row['Username']; ?></td>
		<td><?php echo $row['img_doc']; ?></td>
		<td><?php echo $row['timedate']; ?></td>
		<td><a href="Download.php?id='<?php echo $row['ID']; ?>"><button class="btn">Download</button></a></td>
	</tr>

	
<?php }
?>
</table>
	
</center>