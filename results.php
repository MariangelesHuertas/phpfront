<?php
if (isset($_GET['query'])) {
    // Obtener la consulta desde el formulario
    $query = urlencode($_GET['query']);
    
    // URL del endpoint al que se hará la solicitud
    $endpoint = "http://52.87.243.50:8000/api?query=" . $query;

    // Inicializar cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($ch);
    curl_close($ch);

    // Decodificar el JSON recibido
    $data = json_decode($response, true);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Búsqueda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #e0e0e0;
            padding: 10px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px; /* Reducir el espacio debajo del header */
        }
        .logo {
            display: flex;
            align-items: center;
            margin-right: 20px;
            text-decoration: none; /* Eliminar el subrayado del enlace */
        }
        .logo img {
            height: 50px;
            margin-right: 10px;
        }
        .logo h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .search-form {
            display: flex;
            align-items: center;
            width: 100%;
        }
        .search-form input[type="text"] {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
            box-sizing: border-box;
        }
        .search-form button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        .search-form button:hover {
            background-color: #0056b3;
        }
        .container {
            padding: 0px;
            box-sizing: border-box;
        }
        .results {
            background: white;
            padding-left: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .result-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            background-color: white;
            border-radius: 4px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .result-item a {
            text-decoration: none;
            color: #1a0dab;
            font-weight: bold;
        }
        .result-item a:hover {
            text-decoration: underline;
        }
        .result-item p {
            margin: 5px 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="index.php" class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSemk0kswnUdKZIn3-MO1nojICQWnfhNP769A&s" alt="MiniHub Logo">
            <h1>MiniHub</h1>
        </a>
        <form method="get" action="results.php" class="search-form">
            <input type="text" name="query" value="<?php echo htmlspecialchars($_GET['query'], ENT_QUOTES); ?>" required>
            <button type="submit">Buscar</button>
        </form>
    </div>

    <div class="container">
        <?php if (isset($data)): ?>
            <div class="results">
                <p><strong>Tiempo:</strong> <?php echo number_format($data['time'], 2); ?> segundos</p>
                <?php if (!empty($data['recomendaciones'])): ?>
                    <?php foreach ($data['recomendaciones'] as $recommendation): ?>
                        <div class="result-item">
                            <h4><a href="<?php echo htmlspecialchars($recommendation['path'], ENT_QUOTES); ?>" target="_blank"><?php echo htmlspecialchars($recommendation['title'], ENT_QUOTES); ?></a></h4>
                            <p>Similitud: <?php echo number_format($recommendation['similitud'], 2); ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No se encontraron resultados.</p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>



