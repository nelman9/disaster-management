<?php
require_once('includes/conn.php');

if(isset($_POST['admin']))
{

$idno=$_POST['id'];

$sql="UPDATE reg_details SET type='admin'
   WHERE idno='$idno'";
$result=mysqli_query($con,$sql);

if($result)
{
echo "Details updated";
header('location:edit.php');
}
else{
echo "Not Updated";
}
}
mysql_close($con);
?>