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
                background-image: url({{$video->fondo}});
                text-align: center;
                font-family: 'Figtree', sans-serif;
            }
            .div-video {
                position: relative;
                overflow: hidden;
                width: 100%;
                padding-top: 1%;
            }

            video {
                width: 80%;
                border-radius: 10px;
                box-shadow: 0 0 15px rgba(0,0,0,0.3);
            }

            /* Contenedor principal estilizado como tarjeta */
            .selector-container {
                max-width: 80%;
                margin: 30px auto;
                padding: 20px 30px;
                background-color: #fdfbf7;
                border-radius: 12px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }

            /* Estilo para el título del video */
            .selector-container p {
                margin: 0;
                font-size: 1.25rem;
                font-weight: 600;
                color: #1e293b;
                line-height: 1.4;
            }

            /* Selector desplegable moderno */
            .selector-container select {
                width: 100%;
                max-width: 450px;
                padding: 12px 18px;
                font-size: 15px;
                color: #334155;
                background-color: #f8fafc;
                border: 1px solid #cbd5e1;
                border-radius: 8px;
                outline: none;
                cursor: pointer;
                transition: all 0.2s ease-in-out;
            }

            /* Efecto hover/focus en el select */
            .selector-container select:hover {
                border-color: #94a3b8;
                background-color: #ffffff;
            }

            .selector-container select:focus {
                border-color: #3b82f6;
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
                background-color: #ffffff;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="selector-container">
            <p>{{ $video->titulo }}</p>
            @if($video->several)
                <select id="videoSelect" onchange="cambiarVideo(this)">
                    @foreach($video->others as $other)
                        <option 
                            value="{{ $other->link }}">
                            {{ $other->titulo }}
                        </option>
                    @endforeach
                </select>
            @endif
        </div>
       <div class="div-video">
        <video id="mainVideo" controls>
            <source id="videoSource" src="{{ $video->link }}" type="video/mp4" />
            @if($video->transcript && !$video->several)
                <track kind="subtitles" src="{{ asset('transcripts/'.$video->slug.'.vtt') }}" srclang="en" label="Subtitulos" default />
            @endif
        </video>
        </div>

        <!-- Script JS para realizar el cambio sin refrescar -->
        <script>
            function cambiarVideo(select) {
                const videoUrl = select.value;
                
                // Si no selecciona un video válido, no hace nada
                if (!videoUrl) return;

                const videoPlayer = document.getElementById('mainVideo');
                const videoSource = document.getElementById('videoSource');

                // Asigna la nueva URL y recarga el reproductor
                videoSource.src = videoUrl;
                videoPlayer.load();
                videoPlayer.play();
            }
        </script>
    </body>
</html>
