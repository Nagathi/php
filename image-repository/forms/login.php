<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<header>
        <div class="left">
            <a href="index.php"><h1>Satoru Tools</h1></a>
        </div>
        
        <div class="right">
            <a href="login.php">Entrar</a>
            <a href="cadastro.php">Cadastrar-se</a>
        </div>
    </header>
    <div class="container">
        <h2>Login</h2>
        <form method="post">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br>

            <input type="submit" value="Entrar">
        </form>
    </div>

    <?php
        $usuario = $_POST["usuario"] ?? "";
        $senha = $_POST["senha"] ?? "";

        include "../db/do_login.php";

        $login = getLogin($usuario, $senha) ?? false;

        if($login){
            header("Location: ../home.php");
        }
    ?>
</body>
</html>