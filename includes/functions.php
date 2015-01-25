<?php

//================== Global Variables====================
 
$site_title = 'Jax Creations';
$site_url = 'http://guruservices.co.uk/jaxcreations/';
$document_path = $site_url;
 
//================== Database Connection====================
 
$dbUser = "zadmin_cyberjax";
$dbPass = "aa";
$dbServer = "localhost";

function display_head(){
	global $site_title, $site_url, $document_path;
	echo '<!DOCTYPE html>'."\n"
	.'<html>'."\n"
	.'<head>'."\n"
	.'<meta charset="utf-8">'."\n"
	.'<title>'.$site_title.'</title>'."\n"
	.'<link rel="stylesheet" type="text/css" href="'.$document_path.'css/normalize.css">'."\n"
	.'<link rel="stylesheet" type="text/css" href="'.$document_path.'css/main.css">'."\n"
	.'<link rel="shortcut icon" href="'.$document_path .'images/favicon.ico"/>'. "\n"
    .'<script type="text/javascript" language="javascript" src="'.$document_path .'script/js/jquery-1.7.2.min.js"></script>'. "\n"
    .'<script type="text/javascript" language="javascript" src="'.$document_path .'script/js/jquery.roundabout.min.js"></script>'. "\n"
    .'<script type="text/javascript" src="'.$document_path.'script/jwplayer/jwplayer.js"></script>'."\n"
	.'</head>'."\n";
}

function isLoggedIn(){
	if(isset($_SESSION['user_email']) && $_SESSION['user_email'] != ""){
		return true;
	}
	else{
		return false;
	}
}

?>