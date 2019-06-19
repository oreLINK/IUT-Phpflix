<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="../../CSS/general.css">
 <title>Cookie</title>
</head>
<body>
<h1>Cookie</h1>
<a href="../../menu.php">Retour au menu</a>
<br/><br/>

<?php
if(isset($_COOKIE['visite'])){
    setcookie('visite', $_COOKIE['visite']+1);
} else {
    setcookie('visite', 1);
}
?>
<p>Vous avez visité <?php echo $_COOKIE['visite']+1; ?> fois ce site</p>