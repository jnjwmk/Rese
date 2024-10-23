<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset ('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/common.css') }}">
    @yield('css')
</head>

<body>
    <div class="rese">
        <header class="header">
            <h1 class="header_heading">Rese</h1>
            @yield('nav')

        </header>

        <div class="main">
            @yield('main')
        </div>
    </div>

</body>

</html>