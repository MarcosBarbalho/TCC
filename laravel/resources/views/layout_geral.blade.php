<!DOCTYPE html><?php use App\Models\Layout;?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{Layout::myTitle()}}</title>
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/solid.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/projeto.css') }}" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    </head>
    <body class="{{Layout::$CSS_CLASS}}">
        @include ('_html.nav')
        <div class="container" id="main-content">
            @yield('content')
        </div>
        @include ('_html.footer')
        @include ('_html.js')
    </body>
</html>