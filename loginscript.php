<?php
ob_start();
Session_start();

include_once("includes/conn.php");
if(isset($_POST['id_number']))
{
$pwd=$_POST['pwd'];
$id=$_POST['id_number'];

$sql="SELECT idno,password,type,status
FROM reg_details
WHERE idno =  '$id'
AND password =  '$pwd'";
$query=mysqli_query($con,$sql);
 $result=mysqli_fetch_array($query);
 

if(strlen($id)!=8)
   {
    echo "invalid id";
   header('location:index.php'); 
}elseif($result['password']==$pwd){
	if($result['type']=="admin"){Session_regenerate_id(true);
 	//$member=mysql_fetch_assoc($result);
	$_SESSION['sess_user_adm'] = $result['idno'];
	$_SESSION['sess_pwd'] = $result['password'];
	//Session_write_close();
	header('Location: staff.php');

	}elseif ($result['type']=="user") {

		if($result['status']!="blocked"){
		
		Session_regenerate_id(true);
 	//$member=mysql_fetch_assoc($result);
	$_SESSION['sess_user_id'] = $result['idno'];
	$_SESSION['sess_pwd'] = $result['password'];
	//Session_write_close();
	header('Location: hm.php');
	}else
		header('location:index.php');
	/*if($result['status']!="blocked"){
		header('Location:index.php')
	}*/
 	
}
}
	
}








?>