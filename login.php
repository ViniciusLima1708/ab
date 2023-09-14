<!DOCTYPE html>
<html>
<head>
    <title>Cadastro e Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        Email: <input type="text" name="email"><br>
        Senha: <input type="password" name="senha"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php
        if(isset($_POST["email"]) && isset($_POST["senha"])){
            if($_POST["email"] == $_COOKIE["email"] && $_POST["senha"] == $_COOKIE["senha"]){
                echo "Logado com sucesso!";
            }else{
                echo "Email ou senha inválidos!";
            }
    }
?>