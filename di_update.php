<?php
require_once ('inludes/conn.php');

if(isset($_POST['update']))
{
$ID=$_POST['d_name'];
$lname=$_POST['l_name'];
$nature=$_POST['nat'];
$vnumb=$_POST['victnumb'];
$dod=$_POST['year']. "-" . $_POST['month'] . "-" . $_POST['day'];

$sql="update di SET Disaster_id='$ID',location='$lname',date_of_incident='$dod',number_of_victims='$vnumb',nature='$nature',
     where Disaster_id='$dname'";
$result=mysql_query($sql) 
or   
die ("Cannot update".mysql_error());
if($result)
{
echo "<meta http-equiv=\"refresh\" content=\"0; URL=missing.php\">";
}
else{
echo "Not Updated";
}
}
mysql_close($con);
?>
 
