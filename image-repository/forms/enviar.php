<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="left">
            <a href="../home.php"><h1>Satoru Tools</h1></a>
        </div>
    </header>
    <div class="container">
        <h2>Cadastro</h2>
        <form action="../db/enviar_personagem.php" method="post">
            <label for="path">Caminho da Imagem:</label>
            <input type="text" id="path" name="path" required><br>

            <label for="personagem">Personagem:</label>
            <input type="text" id="personagem" name="personagem" required><br>

            <label for="anime">Anime:</label>
            <input type="text" id="anime" name="anime" required><br>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>