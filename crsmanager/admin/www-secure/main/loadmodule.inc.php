<?
if(!isset($modul_id)) echo"Bitte Wählen Sie eine Funktion aus dem Menue"; 
else {
$sql  = "SELECT * FROM modules ";
$sql .= "WHERE modules_id = ".$modul_id.";";

$result = mysql_query($sql);
$row = mysql_fetch_object($result);
#echo $row->modules_path;
include ($DOCUMENT_ROOT."/../admin/www-secure/modules".$row->modules_path);
}
?>

