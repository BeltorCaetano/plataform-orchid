<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="w-full min-h-screen flex flex-col">
    <section class="w-full flex-1 flex flex-col">
        @yield('section')
    </section>
</body>
</html>