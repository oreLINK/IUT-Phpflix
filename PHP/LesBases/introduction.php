<?php
session_start();
?>
<html>
<head>
 <link rel="stylesheet" href="../../CSS/general.css">
 <title>Introduction</title>
</head>
<body>

<div class="bandeau">
    <span class="logo">
        <a href="../accueil.php">PHPFLIX</a>
    </span>   
    <span class="nav">
        <a href="../menu.php">Accueil</a>  
        <a href="#" style="font-weight: bold;">Introduction</a>
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

<div class="content">
    <div class="case">
        <h3><a href="multiplication.php">La table de multiplication</a></h3>
        <span class="case-texte">
            <p>Affichage d'une table de multiplication où les résultats sont cliquables 
            avec un changement de couleur de fond sur la ligne et la colonne correspondante.</p>
            <span class="indication-vert">
                <p>Disponible partout</p>
            </span>
        </span>
    </div>
    <div class="case">
        <h3><a href="calculatriceGET.php">La calculatrice GET</a></h3>
        <span class="case-texte">
            <p>Formulaire pour calculer la somme de deux nombres. La méthode GET a été utilisée
            dans cet exemple avec les liens http.</p>
            <span class="indication-vert">
                <p>Disponible partout</p>
            </span>
        </span>
    </div>
    <div class="case">
        <h3><a href="calculatricePOST.php">La calculatrice POST</a></h3>
        <span class="case-texte">
            <p>Le même formulaire que pour la calculatrice GET, sauf qu'ici c'est la méthode
                POST qui est utilisée, les données ne sont plus transférées par lien.
            </p>
            <span class="indication-vert">
                <p>Disponible partout</p>
            </span>
        </span>
    </div>
    <div class="case">
        <h3><a href="calendrier.php">Le calendrier</a></h3>
        <span class="case-texte">
            <p>Un calendrier fonctionnel où on peut avoir la liste des jours, 
                changer de mois et d'année.
            </p>
            <span class="indication-vert">
                <p>Disponible partout</p>
            </span>
        </span>
    </div>
</div>