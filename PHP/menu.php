<?php
session_start();
?>
<html>
<head>
 <link rel="stylesheet" href="CSS/general.css">
 <title>Menu</title>
</head>
<body>

<div class="bandeau">
    <span class="logo">
        <a href="accueil.php">PHPFLIX</a>
    </span>   
    <span class="nav">
        <a href="menu.php" style="font-weight: bold;">Accueil</a>  
        <a href="LesBases/introduction.php">Introduction</a>
        <a href="#">Bases de données</a>
    </span>
    <span class="compte">
        <?php
        if ($_SESSION['prenom'] != "" && $_SESSION['nom'] != ""){
            ?> <a href="#"><?php echo $_SESSION['prenom']; ?> </a> 
            <?php
        } else {
            ?> <a href="#">Se connecter</a> <?php
        }
        ?>       
    </span>
</div>

<h3>Les bases</h3>
<ul style="liste-style-type:disc">
<li><a href="LesBases/multiplication.php">Multiplications</a></li>
<li><a href="LesBases/calculatriceGET.php">Calculatrice GET</a></li>
<li><a href="LesBases/calculatricePOST.php">Calculatrice POST</a></li>
<li><a href="LesBases/calendrier.php">Calendrier</a></li>
</ul>

<h3>Bases de données</h3>
<ul style="liste-style-type:disc">
<li><a href="BasesDeDonnees/listemusiciens.php">Liste des musiciens commençant par B</a></li>
<li><a href="BasesDeDonnees/initialemusiciens.php">Recherche par initiale</a></li>
</ul>

<h3>Compte</h3>
<ul style="liste-style-type:disc">
<li><a href="BasesDeDonnees2/inscription.php">Inscription à la base</a></li>
<li><a href="BasesDeDonnees2/identification.php">S'identifier</a></li>
</ul>

<h3>Cookies</h3>
<ul style="liste-style-type:disc">
<li><a href="BasesDeDonnees2/cookie.php">Cookie</a></li>
</ul>

</body>
</html>
