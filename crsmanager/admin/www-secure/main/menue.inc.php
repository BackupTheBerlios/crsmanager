<div id="menue_box"> 
<div class="menue_titel">Menue</div>
<?
if (isset($modul_id)) include ($DOCUMENT_ROOT."/../admin/www-secure/main/loadmodule.inc.php");
else {
$sql  = "SELECT * FROM users, modules, users_modules_relation ";
$sql .= "WHERE users_modules_relation.id = users.id = ".$_SESSION["user_id"].";";

$result = mysql_query($sql);

if ($result && mysql_num_rows($result) > 0) {
	while ($row = mysql_fetch_object($result)) {
	print("<div class=\"menue_item\">
		<a class=\"menue_item\" href=\"/index.php?modul_id=".$row->modules_id."\">".$row->modules_name ."</a>
	</div>");
	}
}
}
?>	  
  </div>
