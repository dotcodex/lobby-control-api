@php 
$price =  round(isset($prices) ? $prices['price'] : 1000); 
$total = isset($prices) ? $prices['total'] : 80000; 
$name = isset($customer) ? $customer : "carlos parra"; 


@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mensaje recibido</title>

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
        .value {
            font-style: normal;
            padding: 15px;
            background: white;
            border-radius: 25px;
            font-size: 34px;
            color: rgb(120, 41, 220);
        }
        h6 {
            align-items: center;
            text-align: center;
            font-size: 12px;
            font-style: italic;
        }
        h6:last-child {
            margin-bottom: 50px;
        }
        .mensaje {

            font-size: larger;
            text-align: center;
            font-family: Raleway, sans-serif;
            font-size: 25px;
            margin: 10px auto;
            width: 600px;

        }

        .mensaje h5 {
            font-size: 18px;
        }

        .link {
            text-align: center;
            font-size: medium;
            font-weight: bold;
            margin: 10px auto;
            width: 600px;
            font-family: Raleway, sans-serif;

        }
        .link .desc{
            font-size: 12px;
            opacity: 0.9;
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
                margin: 0 auto;
                width: auto;
                margin-bottom: 3%;
            }

            .contact-images {
            margin: 10px auto;
            width: auto;
            margin-bottom: 3%;
            margin-top: 3%;
        }
        }

    </style>
</head>
<body>

{{-- <p>
    <strong> Asunto: {{ $msg['subject'] }} </strong>
</p> --}}


    <div class="root">

        <div class="logo">
        
            <img src="https://lobbycontrol.cl/img/LogoLobby.png" alt="logo" />
        </div>

        <hr>

        <div class="head-title">
            <h1>Gracias por Cotizar con Nosotros</h1>
            <h4>Equipo LobbyControl</h4>
        </div>

        <div class="mensaje">
            <h4>Hola, {{ $name }}  </h4>
            
            <h5>
                El valor de nuestro servicio para tu comunidad es de:
            </h5>

            <span class="value"n>${{ $price }}</span>
            <h6>
                Pesos + IVA mensual por departamento.
            </h6>

            <span class="value"n>${{ $total }}</span>
            <h6>
                Pesos + IVA mensual por comunidad.
            </h6>
        
        </div>

      
     

        <div class="link">
            <p> Escríbenos a contacto@lobbycontrol.cl y te apoyaremos con nuestro sistema Único en el Mundo. </a> </p>
            <br/>
            <p class="desc"> Entérate de Tips y Consejos de Seguridad a través de nuestras redes sociales.</p>
        </div>

        <div class="contact-images" >
            <center>
                <a href="https://www.facebook.com/lobbycontrol.cl/"><img src="https://lobbycontrol.cl/img/facebook.svg" alt="Image" ></a>    
                <a href="https://twitter.com/lobbycontrolcl/"><img src="https://lobbycontrol.cl/img/twitter.svg" alt="Image" ></a>    
                <a href="https://www.linkedin.com/company/lobby-control/"><img src="https://lobbycontrol.cl/img/linkedin.svg" alt="Image" ></a>    
                <a href="https://www.instagram.com/lobbycontrolcl/"><img src="https://lobbycontrol.cl/img/instagram.svg" alt="Image" ></a>    
            </center>
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