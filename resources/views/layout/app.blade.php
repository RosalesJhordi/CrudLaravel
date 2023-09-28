<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="shadow-md flex justify-between p-5 items-center">
        <h1 class="text-3xl font-bold">Vagitos.com</h1>
        <nav class="font-bold">
            <a class="mr-5" href="/">Home</a>
            <a class="mr-5" href="">Clientes</a>
            <a class="mr-5" href="">Tienda</a>
        </nav>
    </header>
    <main>
        @yield('contenedor')
    </main>
    <footer class="text-center p-5 text-black text-2xl font-bold uppercase mt-10 ">
        Vagitos.com - todo los derechos reservados {{ now()->year }}
</footer>
</body>
</html>