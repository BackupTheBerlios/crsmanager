<?php 
session_start (); 
include ($DOCUMENT_ROOT."/../admin/settings/conf.php");
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
<?
/*  <div id="position_box">position_box -> Sie Sind Hier</div>
  <div id="left_box">
    <div id="menue_box">
    	<div class="menue_titel">Menuetitel</div>
		<div class="menue_item">menuepunkt 1</div>
	</div>
  </div>
 */
 ?>
  
  
  <div id="document_box">
  <form action="auth.php" method="post">
    <p class="bigtext_black">Bitte Melden Sie sich an:</p>
	<p>Benutzername:<br><input type="text" name="name" class="textfield"><br>
	<p>Passwort:<br><input type="password" name="pwd" class="textfield"></p>
	<p><input type="submit" value="Login" class="submit"></p>
	</form>
<?   if (isset ($_REQUEST["err"])) 
  { 
    echo "<p class=\"error\">Ihre Zugangsdaten waren ungültig</p>"; 
	echo "<p class=\"text\">bitte melden sie sich beim Administrator: 
	<a class=\"link\" href=\"mailto:".ADMIN_MAIL."\">el-cmr admin@hier</a></p>";


    } 
?>

  </div>

<? /*  <div id="right_box">right_box</div> */ ?>
  
  
</div>

</body>
</html>
