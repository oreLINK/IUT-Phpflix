<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../../CSS/general.css">
 <title>Multiplication</title>
</head>
<body>
<div class="bandeau">
    <span class="logo">
        <a href="../accueil.php">PHPFLIX</a>
    </span>   
    <span class="nav">
        <a href="../menu.php">Accueil</a>  
        <a href="introduction.php" style="font-weight: bold;">Introduction</a>
        <a href="../BasesDeDonnees/introduction.php">Bases de données</a>
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

<div class="content-pagetype">
  <span class="originaltext-pagetype">
    <p>Original Phpflix</p>
  </span>
  <span class="title-pagetype">
    <h1>La table de multiplication.</h1>
  </span>
  <span class="listeinfos-pagetype">
    <span class="picto-listeinfos-pagetype">
      <p>1 saison</p>
    </span>
    <span class="picto-listeinfos-pagetype">
      <p>PHP</p>
    </span>
    <span class="picto-listeinfos-pagetype">
      <p>HTML</p>
    </span>
    <span class="picto-listeinfos-pagetype">
      <p>4+</p>
    </span>
  </span>
  <span class="description-pagetype">
    <p>Ed Leuh est un écolier a priori banal, dans la petite ville tranquille de Forme.
      Jusqu'au moment où un évènement inattendu se produisit. En plein cours, on lui demanda une
      opération simple, multiplier deux chiffres. N'ayant pas appris ses tables de multiplications,
      il décida de changer et de reprendre sa vie en main. Suivez les aventures d'Ed, bien décidé à
      ne plus confondre 7 fois 8 et 9 fois 7.</p>
  </span>
  <span class="exercice-pagetype">
<?php
$nbrLigne = 9;
$nbrCol = 9;
$couleur = "#D32F27";
echo '<table border="1" width="400">';
echo '<tr>';
echo '<td bgcolor="#CCCCCC">i*j</td>';
for($k=1;$k<=$nbrCol;$k++){
    echo '<td bgcolor="'.$couleur.'">'.$k.'</td>';
}
echo '</tr>';

for($i=1;$i<=$nbrLigne;$i++){
  if(isset($_GET['i'])){
    $ii = $_GET["i"];
    if($i==$ii){
      echo '<tr bgcolor="'.$couleur.'">';
    } else {
      echo '<tr>';
    }
  } else {
    echo '<tr>';
  }
    for($j=1;$j<=$nbrCol;$j++){
        if($j==1){
            echo '<td bgcolor="'.$couleur.'">'.$i.'</td>';
        }
        $s=$i*$j;
        if(isset($_GET['j'])){
          $jj = $_GET["j"];
          if($j==$jj){
            echo '<td bgcolor="'.$couleur.'">';
          } else {
            echo '<td>';
          }
        } else {
          echo '<td>';
        }
        echo '<a href="multiplication.php?i='.$i.'&j='.$j.'">'.$s.'</a>';
        echo '</td>';
    }
    echo '</tr>';
    $j=1;
}
echo '</table>';
?>
</span>
<a href="introduction.php" class="lienretour-pagetype">Retour</a>
</div>
</body>
</html>
