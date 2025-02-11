<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
    @livewireStyles
</head>

<body class=""font-sans text-gray-900 antialiased"">
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <h1 class="header__title">FashionablyLate</h1>
                <nav class="header-nav__link">
                    @yield('header-nav')
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
        @livewireScripts
    </main>
</body>

</html>
