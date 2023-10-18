<!DOCTYPE html>
<html>
<head>
    <title>Taller de base de datos</title>
    <style>

        body {
            text-align: center;
            background-color: yellow; /* Fondo azul */
        }
        form {
            display: inline-block;
            background-color: blue;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        form input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .mensaje {
            font-size: 24px;
            font-weight: bold;
            color: black;
            margin-bottom: 120px; 
        }
    </style>
</head>
<body>
    <div class="mensaje">Hola  Hermosa aqui puedes exportar tu base de datos</div>
    <form action="exportar.php" method="post">
        <input type="submit" name="exportar" value="Exportar Base de datos">
    </form>
</body>
</html>
