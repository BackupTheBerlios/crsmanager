<?
if($action == "edit") include ("edituser.inc.php");
else if($action == "drop") include ("dropuser.inc.php");
else {
?>
<form method="post">
<input type="hidden" name="formSubmitted" value="true">

<table width="75%" border="0" class="middletext">
  <tr>
    <td><b>[</b><a href="/index.php?module_id=<? echo $modul_id; ?>&action=adduser" class="link">Benutzer anlegen</a><b>]</b></td>
  </tr>
  <tr>
    <td>
<table width="100%" border="0" class="middletext" style="border: #ccc 1px solid;">
  <tr>
    <td>ID</td>
	<td>Login</td>
	<td>Nachname</td>
	<td>Vorname</td>
	<td>email</td>
	<td>status</td>
	<td class="smalllink">&nbsp;</td>
  </tr>
<?
  
$sql = "SELECT * FROM users;";   

$result = mysql_query($sql);
 while($row = mysql_fetch_object($result)){   
?> 
  <tr>
    <td><? echo $row->id ?></td>
	<td><? echo $row->login ?></td>
	<td><? echo $row->surname  ?></td>
	<td><? echo $row->forename  ?></td>
	<td><? echo $row->email ?></td>
	<td><? echo $row->active ?></td>
	<td class="smalllink">[<a href="/index.php?modul_id=100&action=edit&user_id=<? echo $row->id ?>">Bearbeiten</a>]&nbsp;[<a href="/index.php?modul_id=100&action=drop&user_id=<? echo $row->id ?>">L&ouml;schen</a>]</td>
  </tr>
<?	} ?>
</table>
</td>
  </tr>
</table>
</form>
<? } ?> 
