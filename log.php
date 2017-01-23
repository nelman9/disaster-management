<?php

//Start session
session_start();
 
//Include database connection details
include_once('includes/conn.php');
 
//Array to store validation errors
$errmsg_arr = array();
 
//Validation error flag
$errflag = false;
 
//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
$str = @trim($str);
if(get_magic_quotes_gpc()) {
$str = stripslashes($str);
}
return mysql_real_escape_string($str);
}
 
//Sanitize the POST values
$id = clean($_POST['id_number']);
$pwd = clean($_POST['pwd']);
 
//Input Validations
if($id == '') {
$errmsg_arr[] = 'Username missing';
$errflag = true;
}
if($pwd == '') {
$errmsg_arr[] = 'Password missing';
$errflag = true;
}
 
//If there are input validations, redirect back to the login form
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: index.php");
exit();
}
 
//Create query
$qry="SELECT idno,password 
FROM reg_details
WHERE idno =  '$id'
AND password =  '$pwd'";
$result=mysql_query($qry);
     
//Check whether the query was successful or not
if($result) {
if(mysql_num_rows($result) > 0) {
//Login Successful
session_regenerate_id();
$member = mysql_fetch_assoc($result);
$_SESSION['sess_id'] = $member['idno'];
$_SESSION['SESS_pwd'] = $member['password'];
session_write_close();
header("location: hm.php");
exit();
}else {
//Login failed
$errmsg_arr[] = 'user name and password not found';
$errflag = true;
if($errflag) {
$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
session_write_close();
header("location: index.php");
exit();
}
}
}else {
die("Query failed");
}
?>
