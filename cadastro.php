<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if ($conn->query($sql)) {
        $msg = "Usuário cadastrado com sucesso!";
    } else {
        $msg = "Erro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Cadastro de Usuário</h2>

<?php if (isset($msg)) echo "<p>$msg</p>"; ?>

<form method="POST">
    Nome: <input type="text" name="nome" required><br>
    Email: <input type="email" name="email" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Cadastrar</button>
</form>

<p><a href="login.php">Fazer login</a></p>

</body>
</html>
