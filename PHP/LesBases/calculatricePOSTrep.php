<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../../CSS/general.css">
 <title>Calculatrice POST</title>
</head>
<body>
<h1>Calculatrice POST</h1>
<a href="../../menu.php" class="button">Retour au menu</a>
<br/>
<a href="calculatricePOST.php" class="button">Retour à la calculatrice POST</a>
<p> </p>

<p>Bonjour, tu as demandé la somme de
<?php
echo htmlspecialchars($_POST['numero1']);
?>
 et
<?php
echo htmlspecialchars($_POST['numero2']);
?>
 ce qui nous donne
<?php
$s = $_POST['numero1']+$_POST['numero2'];
echo $s;
?>
</body>
</html>