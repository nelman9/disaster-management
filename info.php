<?php
include_once("includes/conn.php");

if(isset($_POST['fi_name']))
{
$regex='/^[a-zA-Z]*$/';
$fi_name=$_POST['fi_name'];
$se_name=$_POST['se_name'];
$surname=$_POST['surname'];
if(!preg_match($regex, $fi_name)) {
     echo '<strong style="color:#F00;">Invalid Firstname, Text Only</strong>';
    
     exit();
}elseif (!preg_match($regex,$se_name)) {
   echo '<strong style="color:#F00;">Invalid Middlename, Text Only</strong>' ;
   header('Refresh: 3 ;url=signup2.php');
     exit();
}elseif(!preg_match($regex, $surname)){
  echo '<strong style="color:#F00;">Invalid Surname, Text Only</strong>';
  header('Refresh: 3 ;url=signup2.php');
  exit();
}
}
if(isset($_POST['mob']))
{

  $id=$_POST['id'];
  $dob=$_POST['year']. "-" . $_POST['month'] . "-" . $_POST['day'];
  $mob=$_POST['mob'];
   $res=$_POST['constituency'];
   $pwd=$_POST['pwd'];
   

   if($_POST['pwd']!=$_POST['cpwd']){
    echo '<strong style="color:#F00;">UNSUCCESSFUL MATCH</strong>';
    header('Refresh: 3 ;url=signup2.php');
   }
  elseif(strlen($id)!=8){

    echo '<strong style="color:#F00;">INVALID ID</strong>';
     header('Refresh: 3 ;url=signup2.php');
  }
else {
   $sql="INSERT INTO reg_details(f_name,m_name,s_name,idno,dob,m_no,constituency,password,type,status)
  	values('$fi_name','$se_name','$surname','$id','$dob','$mob','$res','$pwd','user','activeusr')";
  
 $result=mysqli_query($con, $sql);


  if ($result)
  {
    echo '<strong style="color:#F00;">REGISTERED SUCCESSFUL</strong>';
   header('Refresh: 3 ;url=index.php');
  }
  else{
     echo '<strong style="color:#F00;">ERROR ENCOUNTERED PLEASE REGISTER AGAIN</strong>';

  header('Refresh: 3 ;urL.php');
}
}
}
?>





