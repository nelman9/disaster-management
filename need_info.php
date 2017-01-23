<?php
require_once('includes/conn.php');
if(isset($_POST['d_name']))
{
$regex='/^[a-zA-Z]*$/';
$dname=$_POST['d_name'];
$lname=$_POST['l_name'];
if (!preg_match($regex,$lname)) {
   echo "invalid name-1" ;
     exit();
}else{
  $did=$_POST['id'];
  $need=$_POST['nd'];
  $cont=$_POST['cont'];
  $dod=$_POST['year']. "-" . $_POST['month'] . "-" . $_POST['day'];
 
   $sql="INSERT INTO donations(disaster,d_id,location,date_of_d,needs,contact) 

   VALUES('$dname','$did','$lname','$dod','$need','$cont')";
  	
 $result=mysqli_query($con,$sql);
 
  if ($result)
  {
   header('Location:needs.php');
  }
  else{
  	  echo mysqli_error($con);
   // header('Location:needs.php');
}
}
}

?>
