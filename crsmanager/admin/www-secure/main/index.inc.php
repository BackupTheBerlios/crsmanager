<?
include ($DOCUMENT_ROOT."/../admin/settings/conf.php");
$connectionid = mysql_connect (MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD); 
if (!mysql_select_db (MYSQL_DATABASE, $connectionid)) 
{ 
  die ("Keine Verbindung zur Datenbank"); 
  } 
?>
<html>
<head>
<title>CRM - Manager Solution to Connect</title>
<link href="css/text.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="global_box">
  <div id="top_box"> <font class="bigtext"></font>CRM - Manager <font class="smalltext">Solution 
    to Connect</font> </div>
	
  <div id="border"><img src="img/border.png"></div>

  <div id="position_box">sie sind hier</div>
  <div id="left_box"> 
<? include ("menue.inc.php"); ?>
  </div>

  
  
<div id="document_box"> 
<? include ("loadmodule.inc.php"); ?>
</div>

  <div id="right_box"> 
    <p>Hallo <? echo $_SESSION["login"]; ?></p>
    <p class="smalltext">letzter Login: <? echo $_SESSION["lastlogin"]; ?></p>
    <p><a href="/logout.php" class="smalllink"><img src="/img/logout.gif" width="7" height="7" border="0">&nbsp;Logout</a></p>
  </div>
  
  
</div>

</body>
</html>
