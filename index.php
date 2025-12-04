<?php
// Aplicación PHP para Azure App Service
// Actividad 1 Corte 2 - Sistemas Operativos

// Información personal
$nombre = "Santiago Guerrero";
$ciudad = "Bogotá";
$pais = "Colombia";
$barrio = "Chapinero";
$libros = array(
    "Cien Años de Soledad - Gabriel García Márquez",
    "El Principito - Antoine de Saint-Exupéry",
    "1984 - George Orwell",
    "Don Quijote de la Mancha - Miguel de Cervantes"
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación PHP - Azure App Service</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            background: white;
            max-width: 900px;
            width: 100%;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        
        h1 {
            color: #667eea;
            text-align: center;
            margin-bottom: 10px;
            font-size: 2em;
        }
        
        h2 {
            color: #555;
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.2em;
            font-weight: normal;
        }
        
        .section {
            margin-bottom: 30px;
        }
        
        .section-title {
            color: #667eea;
            font-size: 1.3em;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #667eea;
        }
        
        .info-box {
            background: #f8f9fa;
            padding: 20px;
            margin: 15px 0;
            border-left: 4px solid #667eea;
            border-radius: 5px;
        }
        
        .info-box strong {
            color: #667eea;
            display: block;
            margin-bottom: 8px;
            font-size: 1.1em;
        }
        
        .info-box .value {
            color: #333;
            font-size: 1em;
            line-height: 1.6;
        }
        
        .books-list {
            list-style: none;
            padding-left: 0;
        }
        
        .books-list li {
            background: white;
            padding: 12px 15px;
            margin: 8px 0;
            border-radius: 5px;
            border-left: 3px solid #764ba2;
            color: #333;
        }
        
        .books-list li:hover {
            background: #f0f4f8;
            transform: translateX(5px);
            transition: all 0.3s ease;
        }
        
        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            color: #666;
            font-size: 0.9em;
        }
        
        .footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Esta persona e re pro</h1>
        <h2>Actividad 1 Corte 2 - Sistemas Operativos</h2>
        
        <div class="section">
            <h3 class="section-title">Información Personal</h3>
            
            <div class="info-box">
                <strong>Nombre:</strong>
                <div class="value"><?php echo $nombre; ?></div>
            </div>
            
            <div class="info-box">
                <strong>Ciudad:</strong>
                <div class="value"><?php echo $ciudad; ?></div>
            </div>
            
            <div class="info-box">
                <strong>País:</strong>
                <div class="value"><?php echo $pais; ?></div>
            </div>
            
            <div class="info-box">
                <strong>Barrio:</strong>
                <div class="value"><?php echo $barrio; ?></div>
            </div>
        </div>
        
        <div class="section">
            <h3 class="section-title">Libros que Leo</h3>
            <div class="info-box">
                <ul class="books-list">
                    <?php foreach($libros as $libro): ?>
                        <li><?php echo $libro; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>