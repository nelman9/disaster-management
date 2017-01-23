<?php

require_once('includes/conn.php');
if(isset($_GET['text']));
{

$message=$_GET['text'];
$sql = "SELECT m_no FROM staffs ";

$query=mysqli_query($con,$sql);



while ($row=mysqli_fetch_array($query))
{
//send(,$message);
	$number=$row['m_no'];

$sql2="INSERT INTO send_sms(receiver,msgdata) values ('$number','$message')";

$query2=mysqli_query($con,$sql2);
} 




}



?>