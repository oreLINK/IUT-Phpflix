<?php
session_start();
$_SESSION['prenom'] = "";
$_SESSION['nom'] = "";
$_SESSION['age'] = 24;
?>
<html>
<head>
 <link rel="stylesheet" href="CSS/accueil.css">
 <title>Accueil</title>
</head>
<body>
<div class="bandeau">
    <div class="logo">
            <p>PHPFLIX</p>
    </div>
</div>

<p class="whoAreU">Qui est-ce ?</p>

<span class="color-sample"></span>

<p class="identifiant">
    <a href="menu.php"><?php echo get_current_user(); ?></a>
</p>

</body>
</html>
