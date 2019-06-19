<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../../CSS/general.css">
 <title>Recherche par initiale</title>
</head>
<body>
<h1>Recherche par initiale</h1>
<a href="../../menu.php" class="button">Retour au menu</a>
<p> </p>

<nav>

<form action="initialemusiciensrep.php" method="post">
<br/>
<label for="labelnum1">Choisissez une initiale</label>
<br/>
<br/>
<input type="text" id="initiale" name="initiale">
<br/>
<br/>
<input type="submit" value="Rechercher">
</form>
</body>
</html>