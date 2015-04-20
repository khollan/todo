<html>
    <head>
        <meta charset="utf-8">
        <script src="/assets/javascripts/jquery.min.js"></script>
        <script src="/assets/javascripts/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/assets/stylesheets/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/stylesheets/todo.css">
    </head>
    <body>
        <div class="col-xs-12 top-container">
            <div class="col-xs-2"></div>
            <div class="header-container col-md-8">
               @include('layouts.header')
            </div>
            <div class="col-xs-2"></div>
        </div>
        <div id="middle" class="col-xs-12">
            @section('container')
            <div class="col-xs-2"></div>
            <div class="container col-md-8">
                @yield('content')
            </div>
            <div class="col-xs-2"></div>
        </div>
        @show

        @section('scripts')
            <script src="/assets/javascripts/todo.js"></script>

        @show
    </body>
</html>
