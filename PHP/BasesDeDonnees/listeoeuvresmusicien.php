<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../../CSS/general.css">
 <title>Liste des oeuvres.</title>
</head>
<body>
<h1>Liste des oeuvres.</h1>
<a href="initialemusiciens.php">Refaire une recherche</a>
<br/>
<a href="../../menu.php">Retour au menu</a>
<br/>
<br/>
</body>
</html>

<?php
$dsn = "sqlsrv:Server=info-dormeur;Database=Classique_Web";
$user = 'ETD';
$password = 'ETD';
$pdo = new PDO($dsn, $user, $password);
$id = $_GET["id"];
//page en arrière plan
$page = $_GET["page"];
//page qui s'affiche
$pageAffichee = $page + 1;
$offset = $page*10;

//liste par 10 oeuvres
$sql = "Select Oeuvre.Titre_Oeuvre from Oeuvre 
        INNER JOIN Composer ON Oeuvre.Code_Oeuvre = Composer.Code_Oeuvre
        INNER JOIN Musicien ON Composer.Code_Musicien = Musicien.Code_Musicien
        WHERE Musicien.Code_Musicien = :id
        ORDER BY Musicien.Nom_Musicien
        OFFSET ".$offset." ROWS
        FETCH NEXT 10 ROWS ONLY";
$query = $pdo->prepare($sql);

//compteur
$sql2 = "Select COUNT(*) as nb
        from Oeuvre 
        INNER JOIN Composer ON Oeuvre.Code_Oeuvre = Composer.Code_Oeuvre
        INNER JOIN Musicien ON Composer.Code_Musicien = Musicien.Code_Musicien
        WHERE Musicien.Code_Musicien = :id";
$query2 = $pdo->prepare($sql2);
$query2->execute(['id' => $_GET['id']]);
$nbOeuvres = $query2->fetch()["nb"];

$dividende = $nbOeuvres;
$diviseur = 10;
$partieEntiere = (int)($dividende/$diviseur);
$reste = $dividende%$diviseur;
//si ce n'est pas un multiple de 10
if(($reste)!=0){
    //si le nombre d'oeuvres est < à 10
    if($nbOeuvres<10){
        //il n'y a qu'une page à afficher
        $nombreMaxPages = 1;
    } else {
        //il y a 
        $nombreMaxPages = $partieEntiere + 1;
    }
} else {
    $nombreMaxPages = $partieEntiere;
}

if($nbOeuvres!=0){
    ?>
    <p> <b> <?php
    echo $nbOeuvres." oeuvres disponibles. Page ".$pageAffichee." sur ".$nombreMaxPages;
    ?>
    </b> </p>
    <?php
    if($query->execute(['id' => $_GET['id']])) {
        while ($result = $query->fetch()) {
        ?>
        <p> <?php 
        echo $result['Titre_Oeuvre']."\n"; 
        ?> </p>
        <?php
         }
    } else {
        echo "Erreur";
        var_dump($pdo->errorCode());
    }
} else {
    ?>
    <p> <b> <?php
    echo "Aucune oeuvre connue.";
    ?>
    </b> </p>
    <?php
}

if($page==0){
    $pagePrecedente=0;
} else {
    $pagePrecedente = $page-1;
}
if((($page+1)*10)>$nbOeuvres){
    $pageSuivante = $page;
} else {
    $pageSuivante = $page+1;
}
?>
<a href="listeoeuvresmusicien.php?id=<?php echo $id; ?>&page=<?php echo $pagePrecedente ?>"><input type="button" value="Précédente"></a>
<a href="listeoeuvresmusicien.php?id=<?php echo $id; ?>&page=<?php echo $pageSuivante ?>"><input type="button" value="Suivante"></a>  

