<?php

define("DBHOST","localhost",true);

define("DBUSERNAME","root",true);

define("DBPASSWORD","nelman",true);

define("DBNAME","disaster",true);

function checkusrReg($sender)
	{
		$con = 'mysql:dbname='.DBNAME.';host='.DBHOST;
$cmd = new PDO($con,DBUSERNAME,DBPASSWORD);
       $SQL = "SELECT m_no,f_name FROM reg_details WHERE m_no=$sender";
        $STH = $cmd->prepare($SQL);
                   $STH->execute();
                      $row = $STH->fetch();
                    if ($STH->rowCount()> 0) {

                    	insertSms($_GET['sender'],$_GET['text'],$row['f_name']);
                    }else{

                    	notreg($_GET['sender'],$_GET['text']);

                    	echo 'THANK YOU FOR THE INFORMATION, NAKURU REDCROSS WILL CALL YOU FOR MORE DETAILS AND CONFIRMATION';
                    }
                      

	}


function insertSms($sender,$text,$name)

{	
	
	$con = 'mysql:dbname='.DBNAME.';host='.DBHOST;

	try {

    		$cmd = new PDO($con,DBUSERNAME,DBPASSWORD);

			$stmt = $cmd->prepare("INSERT INTO recieved_sms(number,message) VALUES (:sender,:message)");

			$stmt->bindParam(':sender',$sender);

			$stmt->bindParam(':message',$text);

			$stmt->execute();

			$cmd = null;

				

				if($stmt->rowCount()>0)

				{

					echo "Hello ".$name.". THANK YOU FOR YOUR INFORMATION NAKURU RED-CROSS WILL CALL YOU FOR CONFIRMATION.";
					fowardsms($text);

                                       // header('location:forward.php?text='.$text.'');

				}

				else

				{

					echo "Sorry an error has occured nakuru redcross is working on it";

				}

				

			}		 

		catch (PDOException $e) {

    		echo 'Connection failed: ' . $e->getMessage();

			}

}


function fowardsms($text)
{


	$con = 'mysql:dbname='.DBNAME.';host='.DBHOST;

	try {

    		$cmd = new PDO($con,DBUSERNAME,DBPASSWORD);

		

		$SQL = "SELECT m_no FROM staffs";
            $STH = $cmd->prepare($SQL);
                   $STH->execute();
                      $row = $STH->fetch();
                    if ($STH->rowCount()> 0) {
                      
                      while ($row = $STH->fetch()) {
                         $m_no = $row['m_no'];
                         $STH = $cmd->prepare("INSERT INTO send_sms(receiver,msgdata) VALUES ('$m_no','$text')");

			$STH->bindParam(':m_no',$sender);

			$STH->bindParam(':text',$text);

			$STH->execute();

			$cmd = null;
                         //echo $m_no;
    }
    

                             }	
			
			}		 

		catch (PDOException $e) {

    		echo 'Connection failed: ' . $e->getMessage();

			}



}


function notreg($m_no,$text){
	$text=$text.'From ' .$m_no;

$con = 'mysql:dbname='.DBNAME.';host='.DBHOST;
$cmd = new PDO($con,DBUSERNAME,DBPASSWORD);
       $SQL = "SELECT m_no FROM reg_details WHERE type='admin'";
        $STH = $cmd->prepare($SQL);
                   $STH->execute();
                     
                          $row = $STH->fetch();
                    if ($STH->rowCount()> 0) {
                      
                      while ($row = $STH->fetch()) {
                         $m_no = $row['m_no'];
                         $STH = $cmd->prepare("INSERT INTO send_sms(receiver,msgdata) VALUES ('$m_no','$text')");

			$STH->bindParam(':m_no',$sender);

			$STH->bindParam(':text',$text);

			$STH->execute();

			$cmd = null;
                         //echo $m_no;
    }
    

                             }	


}
checkusrReg($_GET['sender']);

?>

