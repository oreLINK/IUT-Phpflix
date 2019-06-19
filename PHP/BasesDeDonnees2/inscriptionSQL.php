<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../../CSS/general.css">
 <title>Inscription</title>
</head>
<body>
<h1>Inscription</h1>



<?php
$recupNom = $_POST['nom'];
$recupPseudo = $_POST['pseudo'];
$recupMDP = $_POST['mdp'];
if(($recupNom != "") && ($recupPseudo != "") && ($recupMDP != "")) {
    $dsn = "sqlsrv:Server=info-dormeur;Database=Classique_Web";
    $user = 'ETD';
    $password = 'ETD';
    $pdo = new PDO($dsn, $user, $password);
    $sql = "Insert into Abonné(Nom_Abonné,Login,Ville,Password)
    values ('".$_POST['nom']."','".$_POST['pseudo']."','".$_POST['country']."','".$_POST['mdp']."')";
    $query = $pdo->prepare($sql);
    $query->execute();
    ?>
    <p>Inscription effectuée avec succès.</p>
    <?php
} else {
    ?>
    <p>Inscription échouée.</p>
    <?php

}
?>
<a href="identification.php" class="button">Revenir</a>