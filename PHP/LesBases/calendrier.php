<!--
    PARTIE PHP
-->
<?php
session_start();
//ON RÉCUPÈRE LES DONNÉES DU MOIS ET DE L'ANNÉE EN GET QUAND ON CHANGE DE CALENDRIER.
//si c'est le première fois que l'on ouvre le calendrier
if (!isset($_GET['mois'])) {
    //on prend le numéro du mois sans les zéros initiaux (1 à 12)
    $numeroMois = date(n);
} else {
    //sinon on prend la valeur dans l'occurence "mois" via GET
    $numeroMois = $_GET['mois'];
}
//si c'est le première fois que l'on ouvre le calendrier
if (!isset($_GET['annee'])) {
    //on prend l'année sur 4 chiffres (ex. 2003)
    $numAnnee = date(Y);
} else {
    //sinon on prend la valeur dans l'occurence "mois" via GET
    $numAnnee = $_GET['annee'];
}

//ON CHANGE LE MOIS ET L'ANNÉE QUAND LE CALENDRIER CHANGE.
//si le numéro du mois vaut 1 (ou est Janvier)
if ($numeroMois < 1) {
    //on passe à l'année précédente
    $numAnnee = $numAnnee - 1;
    //on passe aussi au dernier mois de cette année précédente
    $numeroMois = 12;
}
//si le numéro du mois vaut 12 (ou est Décembre)
else if ($numeroMois > 12) {
    //on passe à l'année suivante
    $numAnnee = $numAnnee + 1;
    //on passe aussi au premier mois de cette année suivante
    $numeroMois = 1;
}

//CREATION DES TABLEAUX
//tableau des jours dans une semaine
$tabJours = array("", "Lu", "Ma", "Me", "Je", "Ve", "Sa", "Di");
//tableau des mois dans une année
$tabMois = array("", "Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");

//DETAILS SUR LES JOURS
$nombreDeJoursDansMois = date("t", mktime(0, 0, 0, $numeroMois, 1, $numAnnee));
$numeroPremierJourDuMois = date("w", mktime(0, 0, 0, $numeroMois, 1, $numAnnee));
$nombreDeJoursMoisPrec = date("t", mktime(0, 0, 0, ($numeroMois - 1 < 1) ? 12 : $numeroMois - 1, 1, $numAnnee));
$nombreDeJoursMoisSuiv = date("t", mktime(0, 0, 0, ($numeroMois + 1 > 12) ? 1 : $numeroMois + 1, 1, $numAnnee));

//ON AFFICHE LES JOURS DU MOIS (NORMAL) ET LES JOURS DU MOIS PRÉCÉDENT ET DU MOIS SUIVANT (AVEC -)
//on crée le tableau d'une semaine type (Semaine et jour de la semaine)
$tab = array(array(), array(), array(), array(), array(), array());
if ($numeroPremierJourDuMois == 0) {
    $numeroPremierJourDuMois = 7;
}
//$numeroPremierJourDuMois = ($numeroPremierJourDuMois == 0) ? 7 : $numeroPremierJourDuMois;
$temps = 1;
$blanc = "";
//pour chaque semaine
for ($i = 0; $i < 6; $i++) {
    //pour chaque jour d'une semaine
    for ($j = 0; $j < 7; $j++) {
        //si c'est le premier jour de la semaine et que c'est le premier du mois
        if ($j + 1 == $numeroPremierJourDuMois && $temps == 1) {
            // on stocke le premier jour du mois, le jour 1
            $tab[$i][$j] = $temps;
            //les prochains jours ne pourront pas être premiers du mois et on incrémente
            $temps++;
        } //sinon si ce n'est pas le premier jour du mois et qu'il est bien présent dans ce mois
        else if ($temps > 1 && $temps <= $nombreDeJoursDansMois) {
            //on stocke son numéro
            $tab[$i][$j] = $blanc . $temps;
            //on incrémente
            $temps++;
        } //sinon si c'est un jour du mois suivant
        else if ($temps > $nombreDeJoursDansMois) {
            //on le définit par "-" dans le tableau
            $blanc = "-";
            $tab[$i][$j] = $blanc . "1";
            $temps = 2;
        } //sinon on remplit les derniers jours du mois précédent du nombre suffisant pour remplir la première ligne
        else if ($temps == 1) {
            //on stocke le nombre de cases adéquates par "-"
            $tab[$i][$j] = "-" . ($nombreDeJoursMoisPrec - ($numeroPremierJourDuMois - ($j + 1)) + 1);} // on a pas encore mis les num du mois, on met ceux de celui d'avant
    }
}
?>

<!--
    PARTIE HTML
-->
<html>
<head>
<link rel="stylesheet" href="../../CSS/general.css">
 <title>Calendrier</title>
</head>
<body>
<h1>Calendrier</h1>
<a href="../../menu.php" class="button">Retour au menu</a>
<p> </p>
<!--Création du tableau avec les deux premières lignes fusionnées horizontalement-->
<table>
    <!--Création du lien "<<" quand on veut revenir au mois précédent, de deux blancs, du nom du mois en cours, de deux blancs et création du lien ">>" quand on veut aller au mois suivant-->
	<tr><td colspan="7" align="center"><a href="calendrier.php?mois=<?php echo $numeroMois - 1; ?>&amp;annee=<?php echo $numAnnee; ?>"><<</a>&nbsp;&nbsp;<?php echo $tabMois[$numeroMois]; ?>&nbsp;&nbsp;<a href="calendrier.php?mois=<?php echo $numeroMois + 1; ?>&amp;annee=<?php echo $numAnnee; ?>">>></a></td></tr>
	<!--Création du lien "<<" quand on veut revenir à l'année précédente, de deux blancs, du nom de l'année en cours, de deux blancs et création du lien ">>" quand on veut aller à l'année suivante-->
    <tr><td colspan="7" align="center"><a href="calendrier.php?mois=<?php echo $numeroMois; ?>&amp;annee=<?php echo $numAnnee - 1; ?>"><<</a>&nbsp;&nbsp;<?php echo $numAnnee; ?>&nbsp;&nbsp;<a href="calendrier.php?mois=<?php echo $numeroMois; ?>&amp;annee=<?php echo $numAnnee + 1; ?>">>></a></td></tr>
	<?php
echo '<tr>';
//on écris sur la troisième ligne le nom des jours dans l'ordre
for ($i = 1; $i <= 7; $i++) {
    echo ('<td>' . $tabJours
        [$i] . '</td>');
}
echo '</tr>';
//pour chaque semaine affichée sur le calendrier
for ($i = 0; $i < 6; $i++) {
    echo "<tr>";
    //pour chaque jour d'une semaine
    for ($j = 0; $j < 7; $j++) {
        //si c'est la date d'aujourd'hui (même année, même mois et même jour)
        if ($numAnnee == date("Y") && $numeroMois == date("n") && $tab[$i][$j] == date("j")) {
            //on rend la date de couleur blanche sur fond rouge foncé
            echo "<td style=\"color: #FFFFFF; background-color: #8A0808;\">" . $tab[$i][$j] . "</td>";
        }
        //sinon
        else {
            //si la date appartient au mois suivant ou au mois précédent (à cause du "-")
            if (strpos($tab[$i][$j], "-") !== false) {
                //on rend la date plus claire (gris foncé au lieu de noir) sur fond blanc
                echo "<td><font color=#aaaaaa>" . str_replace("-", "", $tab[$i][$j]) . "</font></td>";
            } else {
                //sinon la date est en noir sur fond blanc
                echo "<td>" . $tab[$i][$j] . "</td>";
            }
        }
        //echo "<td".(($numeroMois == date("n") && $numAnnee == date("Y") && $tab[$i][$j] == date("j"))?' style="color: #FFFFFF; background-color: #000000;"':null).">".((strpos($tab[$i][$j],"-")!==false)?'<font color="#aaaaaa">'.str_replace("-","",$tab[$i][$j]).'</font>':$tab[$i][$j])."</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>


