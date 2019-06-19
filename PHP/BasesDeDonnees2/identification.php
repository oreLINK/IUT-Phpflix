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

<p>Pour accéder à Phpflix, veuillez vous connecter.</p>

<form action="identificationSQL.php" method="post">

    <label for="id">Identifiant : </label>
    <input type="text" name="pseudo" id="pseudo" require><br/><br/>

    <label for="nom">Mot de passe : </label>
    <input type="password" name="mdp" id="mdp" require><br/><br/>

    <input type="submit" class="button" value="Se connecter">

</form>