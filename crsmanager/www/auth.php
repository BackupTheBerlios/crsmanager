<?php 
include ($DOCUMENT_ROOT."/../admin/settings/conf.php");
// Session starten 
session_start (); 

// Datenbankverbindung aufbauen 
$connectionid = mysql_connect (MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD); 
if (!mysql_select_db (MYSQL_DATABASE, $connectionid)) 
{ 
  die ("Keine Verbindung zur Datenbank"); 
  } 
  
	$sql = "SELECT * FROM users WHERE "; 
	$sql .= "(login like '".$_REQUEST["name"]."') AND "; 
	$sql .= "(active = 1) AND (wronglogin < ".MAX_TRY.") AND ";
	$sql .= "(password = '".md5 ($_REQUEST["pwd"])."');"; 
	#echo $sql;
	$result = mysql_query ($sql); 
		      
	if (mysql_num_rows ($result) > 0) 
	{ 
		// Benutzerdaten in ein Array auslesen. 
		$data = mysql_fetch_array ($result); 
			  
		// Sessionvariablen erstellen und registrieren 
		$_SESSION["user_id"] = $data["id"]; 
		$_SESSION["login"] = $data["login"]; 
		$_SESSION["user_nachname"] = $data["surname"]; 
		$_SESSION["user_vorname"] = $data["forename"]; 
		$_SESSION["lastlogin"] = $data["lastlogin"]; 
				    
		$sql = "update users set lastlogin = now() where id = ".$data["Id"].";";
		$result = mysql_query ($sql);
		
		header ("Location: index.php"); 
		
	} 
	else 
	{ 
	header ("Location: login.php?err=1"); 	
	} 
?>