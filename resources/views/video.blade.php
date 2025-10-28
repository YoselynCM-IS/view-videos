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
                text-align: center
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
        </style>
    </head>
    <body class="antialiased">
       <div class="div-video">
        <video controls>
            <source src="{{ $video->link }}" type="video/mp4" />
            @if($video->transcript)
                <track kind="subtitles" src="{{ asset('transcripts/'.$video->slug.'.vtt') }}" srclang="en" label="Subtitulos" default />
            @endif
        </video>
        </div>
    </body>
</html>
