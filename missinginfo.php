<?php
require_once('includes/conn.php');
	if(isset($_POST['submit']))
{
$regex='/^[a-zA-Z]*$/';
$fi_name=$_POST['fi_name'];
$se_name=$_POST['se_name'];
$surname=$_POST['surname'];
if(!preg_match($regex, $fi_name)) {
     echo "invalid name" ;
     exit();
}elseif (!preg_match($regex,$se_name)) {
   echo "invalid name-2" ;
     exit();
}elseif(!preg_match($regex, $surname)){
  echo "invalid surname";
  exit();
}


$id=$_POST['id'];
$mob=$_POST['mob'];
$con1=$_POST['constituency'];


   if(strlen($id)!=8){

    echo "invalid id";
  } elseif ($_FILES["file"]["error"] > 0) {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
  


   move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploads/" . $_FILES["file"]["name"]);
   $path= $_FILES["file"]["name"];

  $sql="INSERT INTO missing(f_name,m_name,s_name,id_number,m_no,constituency,path)
  	values('$fi_name','$se_name','$surname','$id','$mob','$con1','$path')";
     $result=mysqli_query($con, $sql);


  if ($result)
  {
   header('Location:hm.php');
  }
  else{
  header('Location:missing.php');
}
}
}
?>











