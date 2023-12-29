<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- CSS stylesheet -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@recogito/annotorious@2.7.12/dist/annotorious.min.css">
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/@recogito/annotorious@2.7.12/dist/annotorious.min.js"></script>
    

        <!-- Styles -->
       
    </head>
    <body>
        @livewire('annotation')
    </body>
</html>
