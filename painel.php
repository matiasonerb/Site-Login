<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Painel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
<p>Você está logado com sucesso.</p>

<p><a href="index.php">Ver todos os usuários</a></p>
<p><a href="logout.php">Sair</a></p>

</body>
</html>
