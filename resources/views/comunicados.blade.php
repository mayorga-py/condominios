<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunicados - Club Diamante</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&display=swap" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
    <style>
        body {
            font-family: 'Lora', serif;
            background-color: #F7F9FC; /* Gris Claro */
            margin: 0;
            padding: 0;
            color: #333333; /* Gris Oscuro para texto */
        }
        .navbar {
            background-color: #002D40; /* Azul Marino */
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
        .carousel {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 40px;
        }
        .carousel-images {
            display: flex;
            transition: transform 0.5s ease;
        }
        .carousel img {
            width: 100%;
            border-radius: 10px;
            min-width: 100%;
        }
        button.prev, button.next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            border-radius: 5px;
            z-index: 1000;
        }
        button.prev {
            left: 10px;
        }
        button.next {
            right: 10px;
        }
        .card {
            background: white; /* Blanco */
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
            color: #002D40; /* Azul Marino */
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            background-color: #F7F9FC; /* Gris Claro */
            margin-top: 40px;
        }
        p {
            font-size: 14px;
            color: #666;
        }
        #calendar {
            max-width: 100%;
            margin: 0 auto;
        }
        .legend {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-size: 14px;
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
        <h1>Club Diamante</h1>
        <div class="navbar-menu">
            <a href="{{ route('comunicados') }}">Comunicados</a>            
            <a href="{{ route('informes') }}">Informes</a>
            <a href="{{ route('pagos') }}">Mis Pagos</a>
            <a href="{{ route('adeudos') }}">Mis Adeudos</a>
        </div>
    </div>
    <div class="container">
        <h2>Comunicados</h2>

        <div class="carousel">
            <div class="carousel-images">
                <img src="Recidencia1.jpg" alt="Imagen 1">
                <img src="Recidencia2.jpg" alt="Imagen 2">
                <img src="Recidencia3.jpg" alt="Imagen 3">
            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>

        <h3>Estimados Residentes</h3>

        <div class="card">
            <h3>Recolección de Basura</h3>
            <p>Días y Horarios:</p>
            <p><strong>Lunes - 8:00 p.m.</strong></p>
            <p><strong>Miércoles - 8:00 p.m.</strong></p>
            <p><strong>Viernes - 8:00 p.m.</strong></p>
            <p>Información adicional: Recuerda sacar la basura en 20 min antes de la hora.</p>
        </div>

        <div class="card">
            <h3>Limpieza de Áreas Comunes</h3>
            <p>Días y Horarios:</p>
            <p><strong>Martes - 5:00 p.m.</strong></p>
            <p><strong>Jueves - 8:00 p.m.</strong></p>
            <p>Información adicional: Recordar que no se pueden usar las áreas mientras estén en limpieza, el tiempo estimado es de 3 hrs. De igual manera si no se saca a tiempo no se podrá realizar la recolección de manera correcta.</p>
        </div>

        <div class="card">
            <h3>Juntas Programadas</h3>
            <p>Días y Horarios:</p>
            <p><strong>Último Jueves del Mes - 7:00 p.m.</strong></p>
            <p>Información adicional: La asistencia es obligatoria para todos los residentes titulares.</p>
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
    </div>
    <div class="footer">
        <p>Contactos: (+52) 442 456 7890 | club.diamante@gmail.com</p>
    </div>

    <script>
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.carousel-images img');
            if (index >= slides.length) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = slides.length - 1;
            } else {
                currentSlide = index;
            }
            const offset = -currentSlide * 100; 
            document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
        }

        function moveSlide(step) {
            showSlide(currentSlide + step);
        }

        document.addEventListener('DOMContentLoaded', function() {
            showSlide(currentSlide);
        });

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var events = [];

            events.push({ title: 'Resev - Casa 18', start: '2025-03-21', color: 'red' });

            for (let i = 0; i < 13; i++) { 
                let thursday = new Date(2025, 0, 2 + i * 7); 
                events.push({ title: 'Limp. General', start: thursday.toISOString().split('T')[0], color: 'green' });
            }

            for (let i = 0; i < 13; i++) { 
                let tuesday = new Date(2025, 0, 7 + i * 14); 
                events.push({ title: 'Limp. Alberca', start: tuesday.toISOString().split('T')[0], color: 'yellow' });
            }

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: events,
                eventContent: function(arg) {
                    const eventText = document.createElement('div');
                    eventText.innerText = arg.event.title;
                    eventText.style.color = arg.event.backgroundColor === 'yellow' ? 'black' : 'white'; 
                    return { domNodes: [eventText] };
                }
            });
            calendar.render();
        });
    </script>
</body>
</html>