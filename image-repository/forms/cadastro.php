<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
        <h2>Cadastro</h2>
        <form action="../db/do_cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>