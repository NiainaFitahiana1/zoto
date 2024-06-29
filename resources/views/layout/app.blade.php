<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{asset('asset/css/bootstrap.css')}}>
    <link rel="stylesheet" href={{asset('asset/fontawesome-free-6.4.2-web/css/all.min.css')}}>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/navbars/navbar-1/assets/css/navbar-1.css">
    <link rel="stylesheet" href={{asset('asset/css/index.css')}}>
        @yield('style')


</head>
<body>
        @yield('corps')
    <script src={{asset('asset/js/jquery-3.7.0.min.js')}}></script>
    <script src={{asset('asset/js/bootstrap.min.js')}}></script>
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/navbars/navbar-1/assets/css/navbar-1.css">
    <script src={{asset('asset/fontawesome-free-6.4.2-web/js/all.min.js')}}></script>
    <script src={{asset('asset/js/index.js')}}></script>
        @yield("script")
</body>
</html>