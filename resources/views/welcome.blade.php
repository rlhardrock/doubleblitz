<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel JetStream LiveWire</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles Enlazar estilos de Tailwind-->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

    <body class="antialiased" >
        <div class="container mx-auto">
            <x-alert color="blue">
                <x-slot name="tag">
                    Warning
                </x-slot>
                    The new web site for test and trial!
            </x-alert>
        </div>
    </body>

</html>
