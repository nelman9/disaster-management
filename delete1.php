
<?php
require_once('includes/conn.php');
if(isset($_POST['delete'])){
	
    $id=$_POST['id'];
	
	$sql="DELETE FROM staffs WHERE staff_no='$id'";
	$result = mysqli_query($con,$sql);


if ($result)
{
	echo "deleted";
	header('location:emp.php');
}else
{
	echo "fail";

}

}

?>