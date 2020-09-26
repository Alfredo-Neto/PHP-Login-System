<?php
include('verifica_login.php'); 
session_start();
?>

<h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>