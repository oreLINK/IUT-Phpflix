<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../../CSS/general.css">
 <title>Liste des musiciens</title>
</head>
<body>
<h1>Liste des musiciens</h1>
<a href="../../menu.php" class="button">Retour au menu</a>
<p> </p>
<?php
$dsn = "sqlsrv:Server=info-dormeur;Database=Classique_Web";
$user = 'ETD';
$password = 'ETD';
$pdo = new PDO($dsn, $user, $password);
$sql = "Select Nom_Musicien from Musicien Where Nom_Musicien Like 'B%' ";
$query = $pdo->query($sql);
foreach ($query as $row) {
    ?>
    <p>Nom : <?php echo $row['Nom_Musicien']."\n" ?></p>
    <?php
}
?>
</body>
</html>