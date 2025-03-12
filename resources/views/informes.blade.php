<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informes - Club Diamante</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lora', serif;
            background-color: #F7F9FC; 
            margin: 0;
            padding: 0;
            color: #333333; 
        }
        .navbar {
            background-color: #002D40; 
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        .navbar h1 {
            margin: 0;
            font-size: 32px;
        }
        .navbar-menu {
            margin-top: 10px;
        }
        .navbar-menu a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 600;
        }
        .navbar-menu a:hover {
            text-decoration: underline;
        }
        .container {
            padding: 40px;
            max-width: 800px;
            margin: 0 auto;
        }
        .card {
            background: white; 
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }
        .card h3 {
            font-size: 20px;
            margin-top: 0;
            color: #002D40; 
        }
        .highlight-card {
            background: #eceff1; 
            border: 1px solid #002D40; 
            margin-bottom: 40px; 
        }
        .highlight-card h3, .highlight-card p {
            color: #333; 
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            background-color: #F7F9FC; 
            margin-top: 40px;
        }
        p {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Club Diamante</h1>
        <div class="navbar-menu">
            <a href="{{ route('comunicados') }}">Comunicados</a>            
            <a href="{{ route('informes') }}">Informes</a>
            <a href="{{ route('pagos') }}">Mis Pagos</a>
            <a href="{{ route('adeudos') }}">Mis Adeudos</a>
        </div>
    </div>
    <div class="container">
        <h2>Informes Mensuales</h2>
        <h3>Estimados Residentes:</h3>
        <h4>Mes Febrero 2025</h4>

        <div class="card">
            <h3>Pago de mes de mantenimiento:</h3>
            <p>$5,000.00</p>
            <p>Incluye: limpieza de áreas comunes y alberca.</p>
        </div>

        <div class="card">
            <h3>Agua, luz y gas:</h3>
            <p>$1250.00</p>
            <p>Consumo de agua: 1000 litros($550.00).</p>
            <p>Consumo de luz: 1000 kw($300.00).</p>
            <p>Consumo de gas: 1000 m3($400.00).</p>
            <p>Pago mensual del agua, luz y gas.</p>
        </div>

        <div class="card">
            <h3>Vigilancia mensuales:</h3>
            <p>$800.00</p>
            <p>Vigilancia diaria, incluyendo días festivos.</p>
        </div>

        <div class="card highlight-card">
            <h3>Gastos totales (Mantenimiento, Vigilancia, Agua, Luz y Gas):</h3>
            <p>$7,050.00</p>
        </div>
    </div>
    <div class="footer">
        <p>Contactos: (+52) 442 456 7890 | club.diamante@example.com</p>
    </div>
</body>
</html>