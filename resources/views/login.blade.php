<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Club Diamante</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Lora', serif;
            background-color: #F7F9FC; 
        }
        .navbar {
            width: 100%;
            background-color: #002D40; 
            color: white;
            text-align: center;
            padding: 20px 0;
            position: absolute;
            top: 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar h1 {
            font-size: 32px;
            margin: 0; 
            color: white; 
        }
        .container {
            text-align: center;
            padding: 40px;
            border: 2px solid #002D40; 
            border-radius: 10px;
            background: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 320px;
            margin-top: 80px; 
        }
        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            font-weight: 600; 
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #002D40; 
            outline: none;
        }
        button {
            padding: 12px;
            background-color: #002D40;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #004d5b; 
        }
        .footer {
            width: 100%;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            background-color: #F7F9FC; 
        }
        .social-icons img {
            width: 30px;
            margin: 0 10px;
        }
        p {
            font-size: 14px;
            color: #666;
        }
        a {
            color: #002D40; 
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Club Diamante</h1>
    </div>
    <div class="container">
        <h2>Bienvenido Residente</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <p><a href="#">¿Olvidaste tu contraseña?</a></p>
            <button type="submit">Acceder</button>
        </form>
    </div>
    <div class="footer">
        <div class="social-icons">
            <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="twitter-icon.jpg" alt="Twitter"></a>
            <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
        </div>
        <p>Contactos: (+52) 442 456 7890 | club.diamante@gmail.com</p>
    </div>
</body>
</html>