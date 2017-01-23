<?php
include_once('includes/conn.php');
mysql_select_db("disaster",$con);
if(isset($_POST['fi_name'])){
echo $fi_name=$_POST['fi_name'];
   echo $se_name=$_POST['se_name'];
  echo $surname=$_POST['surname'];
   echo $id=$_POST['id'];
   echo  $mob=$_POST['mob'];
  echo  $res=$_POST['res'];
   $pwd=$_POST['pwd'];


 if($fi_name==""||$se_name==""||$surname==""||$id==""||$mob==""||$res==""){
  echo "empty fields";
  
  exit();
}
  elseif (strlen($id)!=8) {
  	echo "invalid id";
  	exit();
  }else{
  	$sql="INSERT INTO reg_details(f_name,m_name,s_name,idno,dob,m_no,constituency,password)
  	values($fi_name,$se_name,$surname,$id,$mob,$res,$pwd)";
  }
  if (!mysql_query($sql,$con))
  {
   header('Location:signup2.php');
  die('Error: ' . mysql_error());
 
  }
  else{
  	print("nelson");
}










}



?>