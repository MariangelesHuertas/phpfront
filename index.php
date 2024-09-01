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
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            text-align: center;
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        img.logo {
            width: 100px;
            margin-bottom: 20px;
        }
        h1 {
            margin: 0 0 20px;
            font-size: 2em;
            color: #333;
        }
        form {
            margin: 0;
        }
        input[type="text"] {
            width: 100%;
            max-width: 400px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #ffffff;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSemk0kswnUdKZIn3-MO1nojICQWnfhNP769A&s" alt="MiniHub Logo" class="logo">
        <h1>MiniHub</h1>
        <form method="get" action="results.php">
            <input type="text" name="query" placeholder="Buscar..." required>
            <button type="submit">Buscar</button>
        </form>
    </div>
</body>
</html>

