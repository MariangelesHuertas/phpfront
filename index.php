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
        h1 {
            margin-bottom: 20px;
        }
        form {
            display: flex;
            width: 100%;
            max-width: 600px;
        }
        input[type="text"] {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
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
        .logo {
            margin-bottom: 20px;
        }
        .logo img {
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSemk0kswnUdKZIn3-MO1nojICQWnfhNP769A&s" alt="MiniHub Logo">
    </div>
    <h1>MiniHub</h1>
    <form method="get" action="results.php">
        <input type="text" name="query" placeholder="Buscar..." required>
        <button type="submit">Buscar</button>
    </form>
</body>
</html>


