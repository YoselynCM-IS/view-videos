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
            }
            .div-video {
                position: relative;
                overflow: hidden;
                width: 100%;
                padding-top: 56.25%;
            }

            .div-video iframe {
                position: absolute;
                top: 5%;
                left: 10%;
                bottom: 0;
                right: 0;
                width: 80%;
                height: 80%;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="div-video">
            <iframe src="{{ $video->link }}" width="1280" 
                height="690" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div>
    </body>
</html>
