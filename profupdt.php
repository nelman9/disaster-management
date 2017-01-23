<?php
require_once('includes/conn.php');
require_once('loginscript.php');

if(isset($_POST['update']))
{

$fn=$_POST['fn'];
$mn=$_POST['mn'];
$sn=$_POST['sn'];
$cn=$_POST['cn'];
$ct=$_POST['ct'];
$ps=$_POST['ps'];
$idn=$_SESSION['sess_user_id'];

$sql="UPDATE reg_details SET f_name='$fn', m_name='$mn',s_name='$sn',m_no='$ct',password='$ps'
   WHERE idno!='$idn'";
$result=mysqli_query($con,$sql);

if($result)
{
echo "Details updated";
header('location:selectnids.php');
}
else{
echo "Not Updated";
}
}

?>