<?php // query.php
require_once('includes/conn.php');
if(isset($_POST['value'])){
$value=$_POST['value'];

$sql = "SELECT f_name,m_name,s_name,idno,dob,m_no,constituency,password FROM reg_details where idno like '$value%'";

$result = mysqli_query($con, $sql); 
$rows = mysqli_num_rows($result);
if($rows>0){
      $items='<ul class = "tafuta" >';
     while($run = mysqli_fetch_array($result)){
        $items.='<li><a href="update.php?idno='.$run['idno'].'">'.$run['f_name'].' '.$run['m_name'].'<a></li>';


     }
       $items.= '</ul> ';
     }     else    {

          $items='No results';
    
    }
         echo $items;
     }
     if(isset($_POST['con'])){

   $con=$_POST['con'];
  
 echo  $id=$_POST['id'];

 $rs= mysqli_query($con,"UPDATE reg_details SET constituency = '$con' WHERE idno = $id");
 if(rs){
 	echo
 }else{
  echo mysqli_error($con);
  echo 'error';
 
}
?>