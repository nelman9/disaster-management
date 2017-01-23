<?php
require_once('loginscript.php');
require_once('includes/conn.php');
{

$di=$_SESSION['sess_user_id'];
$sql = "SELECT * FROM reg_details WHERE idno='$di' ";

$result = mysqli_query($con, $sql); 
$row = mysqli_fetch_array($result);
}


?>