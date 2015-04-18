<html>
    <head>
        <meta charset="utf-8">
       <script src="/assets/javascripts/jquery.min.js"></script>
       <link rel="stylesheet" type="text/css" href="/assets/stylesheets/todo.css">
        {{-- <script src="/assets/javascripts/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/assets/stylesheets/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/stylesheets/ihome.css">
        <link rel="stylesheet" type="text/css" href="/assets/stylesheets/buttons.css">--}}
    </head>
    <body>
        @section('container')
            <div class="container col-sm-10">
                @yield('content')
            </div>
        @show

        @section('scripts')
            <script src="/assets/javascripts/todo.js"></script>

        @show
    </body>
</html>
