<?php
require_once('includes/conn.php');
if(isset($_POST['delete'])){
	
    $id=$_POST['id'];
	
	$sql="DELETE FROM di WHERE d_id ='$id'";
	$result = mysqli_query($con,$sql);


if ($result)
{
	echo "deleted";
	header('location:disasterreg.php');
}else
{
	echo "fail";

}

}

?>