<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Satoru Imagens</title>
</head>
<body>
    <header>
        <div class="left">
            <a href="home.php"><h1>Satoru Tools</h1></a>
        </div>
        
        <div class="right">
            <a href='forms/enviar.php'>Enviar</a>; 
        </div>
    </header>
    <div class="content">
        <?php
            include "db/list_all.php";

            $result = getAnimes();

            while ($row = $result->fetch_assoc()) {
                echo "<section>";
                echo "<img src='imagens/" . $row["img"] . "'>";
                echo "<h2>" . $row["nome"] . "</h2>";
                echo "<h2>" . $row["anime"] . "</h2>";
                echo "</section>";
            }
        ?>
    </div>
</body>
</html>