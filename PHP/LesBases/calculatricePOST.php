<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../../CSS/general.css">
 <title>Calculatrice POST</title>
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

<div class="content">
<form action="calculatricePOSTrep.php" method="post">
  <div>
    <label for="labelnum1"></label>
    <input type="number" id="uname" name="numero1">
    <label for="labelnum2">    +    </label>
    <input type="number" id="uname" name="numero2">
    <input type="submit" value="Calculons">
  </div>
</form>
      </div>
</body>
</html>