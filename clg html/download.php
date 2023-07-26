<?php include("DBMS.php");
$id=$_GET['ID'];
$stmt = mysqli_query($conn,"SELECT * FROM std_img where '$id' ");
$count =mysqli_num_rows($stmt);
if($count>0)
{
	$row=mysqli_fetch_array($stmt);
	$img_doc=$row['img_doc'];
	$file='s_doc/'.$img_doc;
	if(headers_sent())
	{
		echo 'HTTP header already sent';
	}
	else{
		ob_end_clean();
		header("content-Type: application/img_doc");
		header("content-Disposition:attachment;filename=\"".basename($file)."\"");
		readfile($file);
		exit;
	}
	echo "<script>window.close();</script>";

}
 else
 {
 	echo " file is not found";
 }

?>