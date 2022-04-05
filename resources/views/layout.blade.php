<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="/css/layout.css?{{time()}}" rel="stylesheet">

    <meta property="og:title" content="Курсы английского языка - TheEngWay" />
    <meta property="og:description" content="Индивидуальные занятия для подростков и взрослых" />
    <meta property="og:image" content="/images/logo.png" />

    <title>Курсы английского языка - TheEngWay</title>
</head>
<body>
    @include('header')

    @yield('content')

    @include('footer')

    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.js" crossorigin="anonymous"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="/js/script.js?{{time()}}" crossorigin="anonymous"></script>
</body>
</html>
