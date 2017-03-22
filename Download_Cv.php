 <?php
include 'Database.php';
$pdo = Database::connect();
$radioValue = $_POST['cv'];
if(strcmp($radioValue,"E")==0)
{
$query = "SELECT name, type, size, content FROM upload WHERE name = 'cv Anglais Hichem Bouhlel.pdf';";
foreach ($pdo->query($query) as $row) {
$name =  $row['name']; 
$type = $row['type']; 
$size = $row['size'];
$content = $row['content'];
header("Content-Disposition: attachment; filename=$name");
header("Content-length: $size");
header("Content-type: $type");
echo $content;
}
}
	else if(strcmp($radioValue,"F")==0)
{
$query = "SELECT name, type, size, content FROM upload WHERE name = 'cv Bouhlel Hichem.pdf';";
foreach ($pdo->query($query) as $row) {
$name =  $row['name']; 
$type = $row['type']; 
$size = $row['size'];
$content = $row['content'];
header("Content-Disposition: attachment; filename=$name");
header("Content-length: $size");
header("Content-type: $type");
echo $content;
echo " French CV ";
}
}
	elseif(strcmp($radioValue,"A")==0)
{
$query = "SELECT name, type, size, content FROM upload WHERE name = 'cv arabe.pdf';";
foreach ($pdo->query($query) as $row) {
$name =  $row['name']; 
$type = $row['type']; 
$size = $row['size'];
$content = $row['content'];
header("Content-Disposition: attachment; filename=$name");
header("Content-length: $size");
header("Content-type: $type");
echo $content;
}
}

Database::disconnect();
?>