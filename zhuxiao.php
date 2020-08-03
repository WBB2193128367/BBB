<?php
if($_GET['action'] == "logout"){
	session_start();
	$_SESSION  = array();
    session_destroy();
header("Location:  ./index.php");}
?>