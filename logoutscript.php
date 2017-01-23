<?php
require_once('loginscript.php');

	unset($_SESSION['sess_user_id']);
	unset($_SESSION['sess_username']);
	header('location:index.php');

?>