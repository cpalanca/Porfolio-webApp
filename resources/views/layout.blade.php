<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Webestudios.es')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- svg images -->
    <!-- https://undraw.co -->
</head>
<body>
<div id="app" class="d-flex flex-column h-screen justify-content-between">
    <header>
        @include('partials.nav')
        @include('partials.session-status')
    </header>
    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-white text-center text-black-50 py-3 shadow">
        {{ config('app.name') }} | Copyright @ {{ date('Y') }}
    </footer>


</div>
</body>
</html>
