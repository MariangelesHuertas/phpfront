<?php
if (isset($_GET['query'])) {
    // Obtener la consulta desde el formulario
    $query = urlencode($_GET['query']);
    
    // URL del endpoint al que se hará la solicitud
    $endpoint = "http://ip172-18-0-35-cr9r9e2im2rg00fl4om0-8000.direct.labs.play-with-docker.com/api?query=" . $query;

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
            margin: 20px;
        }
        .results {
            margin-top: 20px;
        }
        .result-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .result-item a {
            text-decoration: none;
            color: #1a0dab;
        }
    </style>
</head>
<body>
    <h1>Resultados de Búsqueda</h1>
    <form method="get" action="results.php">
        <input type="text" name="query" value="<?php echo htmlspecialchars($_GET['query'], ENT_QUOTES); ?>" required>
        <button type="submit">Volver a buscar</button>
    </form>

    <?php if (isset($data)): ?>
        <div class="results">
            <p><strong>Consulta:</strong> <?php echo htmlspecialchars($data['query'], ENT_QUOTES); ?></p>
            <p><strong>Tiempo:</strong> <?php echo number_format($data['time'], 2); ?> segundos</p>
            <h3>Recomendaciones:</h3>
            <?php if (!empty($data['recomendaciones'])): ?>
                <?php foreach ($data['recomendaciones'] as $recommendation): ?>
                    <div class="result-item">
                        <h4><a href="<?php echo htmlspecialchars($recommendation['path'], ENT_QUOTES); ?>" target="_blank"><?php echo htmlspecialchars($recommendation['title'], ENT_QUOTES); ?></a></h4>
                        <p>Similitud: <?php echo number_format($recommendation['similitud'], 2); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No se encontraron recomendaciones.</p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</body>
</html>
