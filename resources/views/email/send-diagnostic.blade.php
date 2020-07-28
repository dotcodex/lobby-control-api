<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mensaje recibido</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Raleway', sans-serif;
        }

        .root {
            background: rgb(120, 41, 220);
            box-shadow: 0 4px 4px 0 rgba(5, 5, 5, 0.3);
            transition: 0.3s;
            width: 700px;
            border-radius: 3px;
            margin: 2% 25%;
            color: white;
            padding-bottom: 10px;
            display: block;
            justify-content: center;
        }
       

        .logo img {
            width: 200px;
            margin: 10px 0 0 10px;
            
        }

        .head-title {
            text-align: center;
            font-family: Raleway, sans-serif;
            margin: 10px auto;
            width: 600px;


        }

        .mensaje {

            font-size: larger;
            text-align: justify;
            font-family: Raleway, sans-serif;
            margin: 10px auto;
            width: 600px;

        }

        .link {
            text-align: center;
            font-size: larger;
            font-weight: bold;
            margin: 10px auto;
            width: 600px;
            font-family: Raleway, sans-serif;

        }

        .link p {
            margin: 0px;
        }

        .imageDiagnostic {
            margin: 10px auto;
            width: 600px;


        }

        .imageDiagnostic img {
            width: 200px;
            display: block;
            margin: auto;
        }

        .contacto {
            text-align: center;

            margin: 10px auto;
            width: 600px;
            margin-bottom: 3%;

        }

        .contacto p {
            margin: 0;
        }

        hr {
            background-color: white;
            height: 4px;
            border: 0;
        }

    </style>

<body>

    <div class="root">
        <div class="logo">
          
            <img src="https://lobbycontrol.cl/img/LogoLobby.png" alt="logo" />
        </div>
        <hr>
        <div class="head-title">
            <h1>Te Detallamos La Clasificacion de Riesgo de
                Tu Comunidad</h1>
            <h4>Equipo LobbyControl</h4>
        </div>

        <div class="mensaje">
            {{-- <p>Hola {{ $customer }} ,</p> --}}
            <p>holaaa</p>
           
            <p>Muchas Gracias por cotizar con nosotros, es un verdadero agrado saber
                que las comunidades diligentes se preocupan por la seguridad de sus habitantes.</p>
        </div>

        <div class="imageDiagnostic">
            {{-- @if ($msg == "A")
                <img src="https://lobbycontrol.cl/img/ALobbyControl-01.png" alt="Image" />
            @elseif ($msg == "B")
                <img src="https://lobbycontrol.cl/img/BLobbyControl-01.png" alt="Image" />
            @else
                <img src="https://lobbycontrol.cl/img/CLobbyControl-01.png" alt="Image" />
            @endif --}}
            <img src="https://lobbycontrol.cl/img/ALobbyControl-01.png" alt="Image" />
        </div>

        <div class="link">
            <p> Visitanos en www.lobbycontrol.cl</p>
            <p> ¡o en nuestras redes sociales!</p>
        </div>
        <hr>
        <div class="contacto">
            <p>Equipo LobbyControl</p>
            <p>Chile</p>
            <p>¡Hablemos!</p>
            <p>Zona Centro +569 42979702</p>
            <p>Zona Sur +569 38730046</p>
        </div>


    </div>



</body>

</html>
