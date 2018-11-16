<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link  rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}" />
        <link  rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content" id="app">
                <hr>
                <div class="title m-b-md">
                    <h3 class="pb-5 pl-3">VUE EXAMPLE</h3>
                </div>
                <div class="wrap">
                    @yield('content')
                </div>
                

                
                
            </div>
        </div>
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/all.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
