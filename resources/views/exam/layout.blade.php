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

    <meta property="og:title" content="Курсы английского языка - TheEngWay" />
    <meta property="og:description" content="Индивидуальные занятия для подростков и взрослых" />
    <meta property="og:image" content="/images/logo.png" />

    <link rel="canonical" href="{{env('APP_URL')}}">

    <title>Курсы английского языка - TheEngWay</title>
</head>
<body>
<div id="app">
    @yield('content')
</div>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
