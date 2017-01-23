<?php
require_once('includes/conn.php');
if(isset($_POST['block'])){
	
    $idno=$_POST['id'];
	
	$sql="UPDATE reg_details SET status='blocked'
          WHERE idno='$idno'";
	$result = mysqli_query($con,$sql);

if ($result)
{
	echo "blocked";
	header('location:edit.php');
}else
{
	echo "fail";

}

}

?>