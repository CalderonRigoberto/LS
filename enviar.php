<?php
    $destino = 'rcalderon0817@gmail.com';
    $nombre = $_POST['nombreCliente'];
    $correo = $_POST['emailCliente'];
    $mensaje =  "<html>".
    "<head><title>Email de Prueba</title>".
    "<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-weight: 300;
        color: #888;
        background-color:rgba(230, 225, 225, 0.5);
        line-height: 30px;
        text-align: center;
    }
    .contenedor{
        width: 80%;
        min-height:auto;
        text-align: center;
        margin: 0 auto;
        padding: 40px;
        background: #ececec;
        border-top: 3px solid #E64A19;
    }
    .bold{
        color:#333;
        font-size:25px;
        font-weight:bold;
    }
    img{
        margin-left: auto;
        margin-right: auto;
        display: block;
        padding:0px 0px 20px 0px;
    }
    </style>
</head>".
    "<body>" .
        "<div class='contenedor'>".
            "<p>&nbsp;</p>" .
            "<p>&nbsp;</p>" .
                "<span>Felicitaciones <strong class='bold'>" . $nombreCliente . " . . .!</strong></span>" .
                "<p>&nbsp;</p>" .
 			    "<p>Felicidades acaba de ganer un códgio promocional</p> " .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                "<img src="."https://www.google.com.mx/url?sa=i&url=https%3A%2F%2Fleon.locanto.com.mx%2FID_4345364208%2FMasaje-relajante-relajacion-a-domicilio.html&psig=AOvVaw2eWYh-lcuEbO51eZAKnkEN&ust=1625872609290000&source=images&cd=vfe&ved=0CAoQjRxqFwoTCLiB3c3N1PECFQAAAAAdAAAAABAD".">".
                "<p>&nbsp;</p>" .
        
    "</div>" .
    "</body>" .
"</html>";
    mail($destino, "Contacto", $mensjae);
    header("Location:index.html");
?>
