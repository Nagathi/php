<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .page{
            position: fixed;
            display: flex;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
        }

        form{
            display: flex;
            width: 25%;
            height: 50%;
            flex-direction: column;
            background-color: #ccc;
            border-radius: 20px;
        }

        .input{
            margin-bottom: 20px;
            margin-left: 50px;
            margin-right: 50px;
        }

        label{
            margin-top: 20px;
            margin-left: 50px;
            margin-right: 50px;
        }
    </style>
    <div class="page"> 
        <form action="connection.php" method="post"> 
            <label for="nome">Nome</label>
            <input class="input" type="text" name="nome">

            <label>E-mail</label>
            <input class="input" type="text" name="email">

            <label for="matricula">Matrícula</label>
            <input class="input" type="text" name="matricula">

            <input class="input" type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>