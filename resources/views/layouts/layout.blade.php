<html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Theme Template for Bootstrap</title>
        {{--<base href="/hotel/public/">--}}
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/bootstrap-rtl.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.css">
        <link rel="stylesheet" href="/css/font-awesome.css">
        <link rel="stylesheet" href="/css/main.css">

    </head>

    <body>
        @include('layouts.nav')

        @yield('content')

        @include('layouts.footer')
        <script src="/js/html5shiv.js"></script>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/holder.js"></script>
        <script src="/js/respond.min.js"></script>
        <script src="/js/bootstrap.js"></script>

    </body>

</html>

