<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación PHP - Azure App Service</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        h1 {
            color: #667eea;
            text-align: center;
        }
        .info-box {
            background: #f0f4f8;
            padding: 15px;
            margin: 15px 0;
            border-left: 4px solid #667eea;
            border-radius: 5px;
        }
        .info-box strong {
            color: #667eea;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Aplicación PHP en Azure</h1>
        <h2>Actividad 1 Corte 2 - Sistemas Operativos</h2>
        
        <div class="info-box">
            <strong>Fecha y Hora del Servidor:</strong><br>
            <?php echo date('d/m/Y H:i:s'); ?>
        </div>
        
        <div class="info-box">
            <strong>Versión de PHP:</strong><br>
            <?php echo phpversion(); ?>
        </div>
        
        <div class="info-box">
            <strong>Sistema Operativo del Servidor:</strong><br>
            <?php echo php_uname(); ?>
        </div>
        
        <div class="info-box">
            <strong>Nombre del Servidor:</strong><br>
            <?php echo $_SERVER['SERVER_NAME']; ?>
        </div>
        
        <div class="info-box">
            <strong>IP del Cliente:</strong><br>
            <?php echo $_SERVER['REMOTE_ADDR']; ?>
        </div>
        
        <div class="footer">
            <p>✅ Aplicación desplegada exitosamente con GitHub Actions</p>
            <p>🔧 Azure App Service | 📦 CI/CD Pipeline</p>
        </div>
    </div>
</body>
</html>