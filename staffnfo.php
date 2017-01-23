<?php
include_once("includes/conn.php");

if(isset($_POST['fi_name']))
	{
$regex='/^[a-zA-Z]*$/';
$fi_name=$_POST['fi_name'];
$se_name=$_POST['se_name'];
$surname=$_POST['surname'];
$dpt=$_POST['dpt'];
if(!preg_match($regex, $fi_name)) {
     echo "invalid name" ;
     exit();
}elseif (!preg_match($regex,$se_name)) {
   echo "invalid name-2" ;
     exit();
}else
if(!preg_match($regex, $surname)){
  echo "invalid surname";
  exit();
}

$id=$_POST['st_id'];
$mno=$_POST['mob'];

if(strlen($id)!=4){

    echo "invalid id";
  }
else {
   $sql="INSERT INTO staffs(fi_name,se_name,surname,staff_no,m_no,dpt)
  	values('$fi_name','$se_name','$surname','$id','$mno','$dpt')";
  echo $sql;
 $result=mysqli_query($con, $sql);


  if ($result)
  {
   header('Location:index.php');
  }
  else{
  header('Location:staff.php');
}
}}




?>