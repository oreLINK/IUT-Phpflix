<?php
session_start();
?>
<?php
header('Content-Type: image/jpeg');
$dsn = "sqlsrv:Server=info-dormeur;Database=Classique_Web";
$user = 'ETD';
$password = 'ETD';
$pdo = new PDO($dsn, $user, $password);
$sql = "Select Photo from Musicien Where Code_Musicien = " . $_GET["id"];
$query = $pdo->query($sql);
foreach ($query as $row) {
    echo $row['Photo'];
}
