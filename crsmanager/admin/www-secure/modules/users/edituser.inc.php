<?
include ($DOCUMENT_ROOT."/../admin/settings/conf.php");
$connectionid = mysql_connect (MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD); 
if (!mysql_select_db (MYSQL_DATABASE, $connectionid)) 
{ 
  die ("Keine Verbindung zur Datenbank"); 
  } 
include($DOCUMENT_ROOT."/edituserFormHandler.inc");
$sql = "select * from users where id = ".$user_id.";";
#echo "sql:".$sql;
$result = mysql_query($sql);
$row = mysql_fetch_object($result)  
?>

<table width="75%" border="1">
  <tr>
    <td>Loginname</td>
    <td><input type="text" name="loginname" class="textfield" value="<? echo $row->login; ?>"></td>
  </tr>
  <tr>
    <td>Passwort</td>
    <td><input type="password" name="pwd" class="textfield"></td>
  </tr>
  <tr>
    <td>Passwort wiederholen</td>
    <td><input type="password" name="pwd2" class="textfield"></td>
  </tr>
  <tr>
    <td>Vorname</td>
    <td><input type="text" name="forenamename" class="textfield" value="<? echo $row->forename; ?>"></td>
  </tr>
  <tr>
    <td>Nachname</td>
    <td><input type="text" name="surname" class="textfield" value="<? echo $row->surname; ?>"></td>
  </tr>
  <tr>
    <td>email</td>
    <td><input type="text" name="email" class="textfield" value="<? echo $row->email; ?>"></td>
  </tr>
    <tr>
    <td>Konto aktiv</td>
    <td><input name="activ" class="submit" type="checkbox" <?  if ($row->active) echo "checked"; ?>>&nbsp;Ja</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="submit" type="submit" class="submit2" value="speichern"></td>
  </tr>
</table>
