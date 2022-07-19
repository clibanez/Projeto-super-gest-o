<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link href="{{ asset('css/estilo_basico.css') }}" rel="stylesheet">
    </head>

    <body>

        @include('site.layout._partials.top')
        @yield('conteudo')

    </body>
</html>
