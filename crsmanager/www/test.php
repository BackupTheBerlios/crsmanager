<?php require_once('Connections/blop.php'); ?>
<?php require_once('../Connections/blop.php'); ?>
<?php
// FELIXONE - 2002   SB by Felice Di Stefano - www.felixone.it
session_start();
$baba = "neu";
session_register("baba");

mysql_select_db($database_blop, $blop);
$query_Recordset1 = "SELECT Id, login, Nachname, Vorname FROM users";
$Recordset1 = mysql_query($query_Recordset1, $blop) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_blop, $blop);
$query_Recordset2 = "SELECT * FROM users, modules,  users_modules_relation  WHERE users_modules_relation.id = users.Id  AND modules.modules_id = users.Id;";
$Recordset2 = mysql_query($query_Recordset2, $blop) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
?>
<html>
<head>
<title>Unbenanntes Dokument</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>

