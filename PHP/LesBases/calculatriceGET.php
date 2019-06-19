<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../../CSS/general.css">
 <title>Phpflix</title>
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
    <h1>Calculons GET</h1>
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
    <p>Découvrez la série la plus addition-ctive !</p>
  </span>
  <span class="exercice-pagetype">
<form method="get">
  <div>
    <label for="labelnum1"></label>
    <input type="number" id="uname" name="numero1">
    <label for="labelnum2">    +    </label>
    <input type="number" id="uname" name="numero2">
    <input type="submit" value="Calculons">
  </div>
</form>

<p>Bonjour, tu as demandé la somme de 
<?php
if(isset($_GET['numero1'])){
  echo $_GET['numero1'];
} else {
  echo "?";
}
?>
 et
<?php
if(isset($_GET['numero2'])){
  echo $_GET['numero2'];
} else {
  echo "?";
}
?>
 et cela donne
<?php
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
$s = $_GET['numero1']+$_GET['numero2'];
echo $s;
} else {
  echo "?";
}
?>
.
</span>
<a href="introduction.php" class="lienretour-pagetype">Retour</a>
</div>
</body>
</html>
