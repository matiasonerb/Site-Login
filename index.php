<?php
include('config.php');
$resultado = $conn->query("SELECT id, nome, email FROM usuarios");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Usuários Cadastrados</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($linha = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?= $linha['id'] ?></td>
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['email'] ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<p><a href="painel.php">Voltar ao Painel</a></p>

</body>
</html>
