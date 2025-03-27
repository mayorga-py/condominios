<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Adeudos - Club Diamante</title>
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
            border: 1px dotted #8e44ad;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            background-color: #F7F9FC; 
            margin-top: 40px;
        }
        .btn {
            background-color: #e67e22; 
            color: white;
            padding: 5px 10px; 
            border: none;
            border-radius: 3px; 
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 14px; 
            center; 
        }
        .btn:hover {
            background-color: #d35400;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Club Diamante - Administración</h1>
        <div class="navbar-menu">
            <a href="{{ route('AdminComunicados') }}">Comunicados</a>
            <a href="{{ route('AdminPagos') }}">Pagos Realizados</a>
            <a href="{{ route('AdminAdeudos') }}">Adeudos Residentes</a>
        </div>
    </div>
    <div class="container">
        <h2>Adeudos de Residentes</h2>
        <h3>Febrero:</h3>

        @foreach([1, 3, 5, 12, 20] as $i) 
        <div class="card">
            <h4>Casa {{ sprintf("%02d", $i) }}</h4>
            <p>Monto: <strong>$10,000.00</strong></p>
            <p>Estado: <span class="btn">Pendiente</span></p>
        </div>
        @endforeach

        <div class="footer">
            <p>&copy; 2023 Club Diamante. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>