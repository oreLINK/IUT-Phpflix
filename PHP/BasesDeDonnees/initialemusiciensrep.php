<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../../CSS/general.css">
 <title>Recherche par initiale</title>
</head>
<body>
<h1>Liste des musiciens commençant par <?php echo $_POST['initiale'] ?></h1>
<a href="initialemusiciens.php" class="button">Refaire une recherche</a>
<br/>
<a href="../../menu.php" class="button">Retour au menu</a>
<br/>
</body>
</html>

<?php
$dsn = "sqlsrv:Server=info-dormeur;Database=Classique_Web";
$user = 'ETD';
$password = 'ETD';
$pdo = new PDO($dsn, $user, $password);
$sql = "Select Code_Musicien,Code_Pays,Nom_Musicien from Musicien Where Nom_Musicien Like :init";
$query = $pdo->prepare($sql);
if($query->execute(['init' => $_POST['initiale'].'%'])) {
     while ($result = $query->fetch()) {
        echo "<a href=\"listeoeuvresmusicien.php?id=".$result['Code_Musicien']."&page=0\">".$result['Nom_Musicien']."</a><br/>";
    echo "<img src=\"photomusicien.php?id=".$result['Code_Musicien']."\"/><br/>";
    ?>
    <br/>
    <?php
     }
}
?>