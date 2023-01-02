<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Media</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blue-50">
    <div class="container flex h-screen w-full items-center justify-center px-10">
        <div class="bg-white prose p-10 text-center">
            @yield('content')
        </div>
    </div>
</body>
</html>
