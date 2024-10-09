<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-gray-100 text-gray-700">
    @yield('content')
</body>

</html>
