<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Majestic Education</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                background-image: url("/images/fondo.jpg");
                background-size: cover;          
                background-repeat: no-repeat;    
                background-position: center;     
                background-attachment: fixed;    
                min-height: 100vh;               
                margin: 0;                       
                text-align: center;
                font-family: 'Figtree', sans-serif;
                
                /* Estilos añadidos para el texto */
                color: #ffffff;                  /* Cambia el texto a blanco */
                display: flex;
                flex-direction: column;
                justify-content: center;         /* Centra el contenido verticalmente */
                align-items: center;             /* Centra el contenido horizontalmente */
            }

            /* Estilos opcionales para destacar los títulos */
            .content {
                background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente para mejorar legibilidad */
                padding: 2rem;
                border-radius: 10px;
            }

            h3 {
                font-size: 2.5rem;
                margin-bottom: 0.5rem;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Sombra para resaltar sobre el fondo */
            }

            h4 {
                font-size: 1.75rem;
                font-weight: 400;
                margin-top: 0;
                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
            }
        </style>
    </head>
    <body>
        <div class="content">
            <h3>Coming soon!</h3>
            <h4>Professional Ladder Workplace Simulation Videos</h4>
        </div>
    </body>
</html>