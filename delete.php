<?php
require_once('includes/conn.php');
if(isset($_POST['delete'])){
	
    $id=$_POST['id'];
	
	$sql="DELETE FROM reg_details WHERE idno ='$id'";
	$result = mysqli_query($con,$sql);


if ($result)
{
	echo "deleted";
	header('location:edit.php');
}else
{
	echo "fail";

}

}

?>