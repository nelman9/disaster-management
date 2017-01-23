<?php
include_once("includes/conn.php");
function generateRandomString($length = 15) {
  $RNO = rand().time();
    $characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ$RNO";
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    
    }
    return $randomString;
  
  
   }
 
$did=generateRandomString();


if(isset($_POST['d_name']))
{
$regex='/^[a-zA-Z]*$/';
$dname=$_POST['d_name'];
$lname=$_POST['l_name'];
if (!preg_match($regex,$lname)) {
   echo "invalid name-2" ;
     exit();
}else{

  $nature=$_POST['nat'];
  $vnumb=$_POST['victnumb'];
  $dod=$_POST['year']. "-" . $_POST['month'] . "-" . $_POST['day'];
 
   $sql="INSERT INTO di values('$dname','$did','$lname','$dod','$vnumb','$nature')";
  	
 $result=mysqli_query($con, $sql);


  if ($result)
  {
   header('Location:needs.php');
  }
  else{
  	echo "failed";
}
}
}

?>










