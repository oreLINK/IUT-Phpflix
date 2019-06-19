<?php
session_start();
?>
<html>
<head>
 <link rel="stylesheet" href="../../CSS/general.css">
 <title>Menu</title>
</head>
<body>

<div class="bandeau">
    <span class="logo">
        <a href="../../accueil.php">PHPFLIX</a>
    </span>   
    <span class="nav">
        <a href="../../menu.php">Accueil</a>  
        <a href="../../LesBases/introduction.php">Introduction</a>
        <a href="#" style="font-weight: bold";>Bases de données</a>
    </span>
</div>
<br/><br/>


<?php
$recupPseudo = $_POST['pseudo'];
$recupMDP = $_POST['mdp'];
$dsn = "sqlsrv:Server=info-dormeur;Database=Classique_Web";
$user = 'ETD';
$password = 'ETD';
$pdo = new PDO($dsn, $user, $password);
$sql = "Select Password
from Abonné
where Abonné.Login = :login";
$query = $pdo->prepare($sql);
$query->execute(['login' => $recupPseudo]);
$result = $query->fetch();
if(($result['Password'] == $recupMDP) && ($recupPseudo != "") && ($recupMDP != "")){
    ?>
    <p>Connexion effectuée avec succès.</p>
    <?php
} else {
    ?>
    <p>Connexion échouée.</p>
    <?php
}
?>
<a href="identification.php" class="button">Revenir</a>