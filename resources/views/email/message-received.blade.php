@php 
$name = strtoupper(isset($msg) ? $msg['name'] : 'carlos'); 
$email = isset($msg) ? $msg['email'] : 'carlos.2055@hotmail.com'; 
$phone = isset($msg) ? $msg['phone'] : "65644455"; 
$message = isset($msg) ? $msg['message'] : "Los leones son los únicos felinos que viven en manada. Las unidades familiares pueden incluir hasta tres machos, una docena de hembras y sus crías. Todas las leonas de una manada están emparentadas y usualmente los pequeñas hembras en su seno se quedan con el grupo a medida que envejecen. Los varones jóvenes sin embargo tarde o temprano abandonan el grupo o son expulsados y establecen su propia manada."; 



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
            text-align: center;
            font-family: Raleway, sans-serif;
            margin: 10px auto;
            width: 600px;

        }

        .table-contact {
            margin: 10px auto;
            width: 600px;
            
        }
        .table-contact table{
            margin: 0 auto;
            text-align: left;    
            border-collapse:separate; 
            border-spacing: 1em 1em;
        }

      

    

        .table-contact h4{
            margin: 20px 20%;
            text-align: left;    

        }
        .texto-div {
            margin: 10px auto;
            width: 600px;
            
        }

        .texto{
            width: 70%;
            padding: 10px;
            margin: 10px auto;
            
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

            .table-contact {
                margin: 10px auto;
                width: auto;
            
            }

            .table-contact h4{
                margin: 20px 9%;
                text-align: left;    

            }

            .texto-div {
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
</head>
<body>

{{-- <p>
    <strong> Asunto: {{ $msg['subject'] }} </strong>
</p> --}}

{{-- <p>
    <strong> telefono: {{ $msg['phone'] }}  </strong>
</p>

<p>
    <strong> mensaje:  {{ $msg['message'] }} </strong>
</p> --}}

    <div class="root">

        <div class="logo">
        
            <img src="https://lobbycontrol.cl/img/LogoLobby.png" alt="logo" />
        </div>

        <hr>

        <div class="head-title">
            <h1>Hola Equipo de LobbyControl</h1>
            
        </div>

        <div class="mensaje">
            <p>
                El Cliente {{$name}} se ha puesto en contacto con ustedes
            </p>
        
        </div> 

        <div class="table-contact">
            <table>
               {{-- <h4>Datos :</h4> --}}
                <tr>
                    <th>Email:</th>
                    <td> {{ $email }} </td>
             
                </tr>
                <tr>
                    <th>Telefono:</th>
                    <td> {{ $phone }} </td>
                 
                </tr>
                <tr>
                    <th>Mensaje:</th>
                </tr>
                
              </table>
              
        </div>

        <div class="texto-div">
            <p class="texto" > {{ $message }} </p>
        </div>

        {{-- <div class="link">
            <p> Visitanos en <a href="https://lobbycontrol.cl/">www.lobbycontrol.cl </a> </p>
            <p> ¡o en nuestras redes sociales!</p>
        </div> --}}

        {{-- <div class="contact-images" >
            <a href="https://www.facebook.com/lobbycontrol.cl/"><img src="https://lobbycontrol.cl/img/facebook.svg" alt="Image" ></a>    
            <a href="https://twitter.com/lobbycontrolcl/"><img src="https://lobbycontrol.cl/img/twitter.svg" alt="Image" ></a>    
            <a href="https://www.linkedin.com/company/lobby-control/"><img src="https://lobbycontrol.cl/img/linkedin.svg" alt="Image" ></a>    
            <a href="https://www.instagram.com/lobbycontrolcl/"><img src="https://lobbycontrol.cl/img/instagram.svg" alt="Image" ></a>    
        </div> --}}

        <hr>

  

    </div>



</body>
</html>