<html lang="ja">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title')</title>

<script src="{{ asset('js/app.js') }}" defer></script>

<link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white mt-3 mb-3 flex-column">
            <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <main class="py-4 ">
                @yield('content')
            </main>
        </nav>
    </div>
</body>

</html>