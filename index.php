<!DOCTYPE html>
<html>
<head>
    <title>Cadastro e Login</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form action="index.php" method="post">
        Nome: <input type="text" name="nome"><br>
        Email: <input type="text" name="email"><br>
        Senha: <input type="password" name="senha"><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>


<?php
// cadastro.php
session_start();

// Simulando um banco de dados
$usuarios = [];

if (isset($_POST["nome"]) && isset($_POST["email"]) && $_POST["senha"]) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    // Verifica se o email é válido e a senha tem pelo menos 8 caracteres
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($senha) >= 8) {
        setcookie("nome", $nome, time()+(3600*24));
        setcookie("email", $email, time()+(3600*24));
        setcookie("senha", $senha, time()+(3600*24));
        header("Location: login.php");
    } else {
        echo 'Email ou senha errado!';
    }
}
?>

