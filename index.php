<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniHub - Buscador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .logo {
            margin-bottom: 10px; /* Ajustado para más espacio entre el logo y el nombre */
        }
        .logo img {
            height: 80px; /* Tamaño del logo */
        }
        h1 {
            margin: 0;
            margin-bottom: 20px;
            font-size: 24px;
        }
        form {
            display: flex;
            width: 100%;
            max-width: 800px;
        }
        input[type="text"] {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
            box-sizing: border-box; /* Incluye padding y border en el ancho total */
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSemk0kswnUdKZIn3-MO1nojICQWnfhNP769A&s" alt="MiniHub Logo">
        </div>
        <h1>MiniHub</h1>
        <form method="get" action="results.php">
            <input type="text" name="query" placeholder="Buscar..." required>
            <button type="submit">Buscar</button>
        </form>
    </div>
</body>
</html>



