 <?php
include 'Database.php';
$pdo = Database::connect();

$query = "SELECT name, type, size, content FROM upload ";
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
Database::disconnect();

?>