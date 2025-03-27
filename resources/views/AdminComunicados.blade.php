<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Comunicados - Club Diamante</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&display=swap" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
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
        .footer {
            text-align: center;
            padding: 10px 0;
            background-color: #F7F9FC; 
            margin-top: 40px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: #002D40; 
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #003c4f;
        }
        .legend div {
            display: flex;
            align-items: center;
        }
        .legend div span {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-right: 5px;
        }
        .red { background-color: red; }
        .green { background-color: green; }
        .yellow { background-color: yellow; color: black; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Club Diamante - Administración</h1>
        <div class="navbar-menu">
            <a href="{{ route('AdminComunicados') }}">Comunicados</a>
            <a href="{{ route('AdminPagos') }}">Pagos Realizados</a>
            <a href="{{ route('AdminAdeudos') }}">Adeudos Recidentes</a>
        </div>
    </div>
    <div class="container">
        <h2>Administrar Comunicados</h2>

        <div class="card">
            <h3>Recolección de Basura</h3>
            <form method="POST">
                @csrf
                <div class="form-group">
                    <label for="dias_horarios_basura">Días y Horarios:</label>
                    <textarea id="dias_horarios_basura" name="dias_horarios_basura" rows="3" placeholder="Ingrese días y horarios"></textarea>
                </div>
                <div class="form-group">
                    <label for="info_basura">Información adicional:</label>
                    <textarea id="info_basura" name="info_basura" rows="2" placeholder="Ingrese información adicional"></textarea>
                </div>
                <button type="submit" class="btn">Guardar</button>
            </form>
        </div>

        <div class="card">
            <h3>Limpieza de Áreas Comunes</h3>
            <form method="POST">
                @csrf
                <div class="form-group">
                    <label for="dias_horarios_limpieza">Días y Horarios:</label>
                    <textarea id="dias_horarios_limpieza" name="dias_horarios_limpieza" rows="2" placeholder="Ingrese días y horarios"></textarea>
                </div>
                <div class="form-group">
                    <label for="info_limpieza">Información adicional:</label>
                    <textarea id="info_limpieza" name="info_limpieza" rows="3" placeholder="Ingrese información adicional"></textarea>
                </div>
               <button type="submit" class="btn">Guardar</button>
            </form>
        </div>

        <div class="card">
            <h3>Juntas Programadas</h3>
            <form method="POST">
                @csrf
                <div class="form-group">
                    <label for="dias_horarios_juntas">Días y Horarios:</label>
                    <input type="text" id="dias_horarios_juntas" name="dias_horarios_juntas" placeholder="Ingrese días y horarios">
                </div>
                <div class="form-group">
                    <label for="info_juntas">Información adicional:</label>
                    <textarea id="info_juntas" name="info_juntas" rows="2" placeholder="Ingrese información adicional"></textarea>
                </div>
                <button type="submit" class="btn">Guardar</button>
            </form>
        </div>

        <div class="card">
            <h3>Calendario de Reservaciones (Alberca y palapa)</h3>
            <div class="legend">
                <div><span class="red"></span> Ocupado</div>
                <div><span class="green"></span> Día de Limpieza General</div>
                <div><span class="yellow"></span> Limpieza de Alberca</div>
            </div>
            <div id="calendar"></div>
        </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();
    });
</script>