<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mensaje recibido</title>
    <style>
        .root {
        background: rgb(120,41,220);
        box-shadow: 0 4px 4px 0 rgba(5, 5, 5, 0.3);
        transition: 0.3s;
        width: 700px;
        border-radius: 3px;
        margin: 2% 25%;
        height: 65vh;
        color: white;
        }
        .logo {
            width: 50px;
        }
        .head-title {
           
            text-align: center;
            font-family: Arial, sans-serif;
            margin: 0 5%;
            width: 600px;
        }
        .mensaje {
            margin: 0 8%;
            font-size: larger;
            text-align: justify;
        }
        .link {
            text-align: center;
            font-size: larger;
            font-weight: bold;
        }
        .link p {
            margin: 0px;
        }
        .contacto {
            text-align: center;
            margin-bottom: 3%;
           
        }
        .contacto p {
            margin: 0;
        }
        hr { 
            background-color: rgb(0, 204, 255); 
            height: 4px; 
            border: 0; } 

    </style>
<body>

{{-- <p>
    <strong> Asunto: {{ $msg['subject'] }} </strong>
</p> --}}

{{-- <p>
<strong> tu nivel de riesgo es :  {{ $msg }} </strong>
</p> --}}
<div class="root">
    <div class="logo">
        <img src="{{URL::asset('/img/LogoLobby.png')}}" alt="Image"/>
    </div>
    <hr>
    <div class="head-title">
        <h1>Gracias por Cotizar con Nosotros
        Te Detallamos La Clasificacion de Riesgo de 
        Tu Comunidad</h1>
        <h4>Equipo LobbyControl</h4>
    </div>

    <div class="mensaje">
        {{-- <p>Hola {{ $customer->fullname }} ,</p> --}}
        <p>Muchas Gracias por cotizar con nosotros, es un verdadero agrado saber 
        que las comunidades diligentes se preocupan por la seguridad de sus habitantes.</p>
    </div>
    
    <div class="link" >
        <p>  Visitanos en www.lobbycontrol.cl</p>
        <p>  ¡o en nuestras redes sociales!</p>
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