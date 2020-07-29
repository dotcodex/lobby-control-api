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
            padding: 15px;
            
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
      

        .link a:link {
           text-decoration: none ;
           color: white;
           
        }
        .link a:visited {color: white;  font-family: Raleway; text-decoration: none }
        .link a {
            text-decoration: none ;
           color: white;
         
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

        .contact-images {
            margin: 10px auto;
            width: 600px;
            display: flex;
            justify-content: center;
            margin-bottom: 3%;
            margin-top: 3%;
        }

        .contact-images a {
            margin: 0 5px 0 5px;

        }

        .contact-images img {
            width: 40px; 
            height : 40px;
        }

        hr {
            background-color: white;
            height: 4px;
            border: 0;
        }

        @media only screen and (max-width: 600px) {
            .root {
                width: auto;
                margin: 2% 0;
            }

            .logo img {
                width: 200px;           
                display: block;
                margin: auto; 
                padding-top: 10px;
                   
                
            }


            .head-title {
                text-align: center;
                font-family: Raleway, sans-serif;
                width: auto;
                margin: 10px 7%;
            }

            .mensaje {

                font-size: larger;
                text-align:  center;
                font-family: Raleway, sans-serif;
                width: auto;
                margin: 10px 7%;

            }

            .imageDiagnostic {
                margin: 10px auto;
                width: auto;
            }

            .link {
            text-align: center;
            font-size: larger;
            font-weight: bold;
            margin: auto;
            margin-bottom: 5%;
            width: auto;
            font-family: Raleway, sans-serif;

            }

            .contacto {
            text-align: center;

            margin: 10px auto;
            width: auto;
            margin-bottom: 3%;

            }

            .contact-images {
            margin: 10px auto;
            width: auto;
            display: flex;
            justify-content: center;
            margin-bottom: 3%;
            margin-top: 3%;
        }
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
            <p>Holaaa CARLOS</p>
           
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
        <div class="mensaje">
            <p> 
                Escríbenos a: 
            </p>
            <p>
                contacto@lobbycontrol.cl y te apoyaremos con nuestro sistema Único en el Mundo.
                Entérate de Tips y Consejos de Seguridad a través de nuestras redes sociales @lobbycontrolcl.
            </p>
           
            {{-- @if ($msg == "A")
                <p> 
                    Escríbenos a contacto@lobbycontrol.cl y te apoyaremos con nuestro sistema Único en el Mundo.
                    Entérate de Tips y Consejos de Seguridad a través de nuestras redes sociales @lobbycontrolcl.
                </p>
            @elseif ($msg == "B")
                <p>
                    Escríbenos a contacto@lobbycontrol.cl y te apoyaremos con nuestro sistema Único en el Mundo.
                    Entérate de Tips y Consejos de Seguridad a través de nuestras redes sociales @lobbycontrolcl.
                </p>
            @else
                <p>
                    ¡Evita multas y un proceso Civil o Penal por no cumplimiento de las responsabilidades que estipula la Ley! 
                    Entérate de Tips y Consejos de Seguridad a través de nuestras redes sociales @lobbycontrolcl.
                </p>
            @endif --}}
           
        </div>

        <div class="link">
            <p> Visitanos en <a href="https://lobbycontrol.cl/">www.lobbycontrol.cl </a> </p>
            <p> ¡o en nuestras redes sociales!</p>
        </div>

        <div class="contact-images" >
            <a href="https://www.facebook.com/lobbycontrol.cl/"><img src="/img/facebook.svg" alt="Image" ></a>    
            <a href="https://twitter.com/lobbycontrolcl/"><img src="/img/twitter.svg" alt="Image" ></a>    
            <a href="https://www.linkedin.com/company/lobby-control/"><img src="/img/linkedin.svg" alt="Image" ></a>    
            <a href="https://www.instagram.com/lobbycontrolcl/"><img src="/img/instagram.svg" alt="Image" ></a>    
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
