<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="bg-zinc-900 text-white w-screen h-screen box-border">
    <nav class="w-full h-14 flex items-center px-4 justify-between border-b-2 border-zinc-800">
        <h1 class="font-bold text-lg uppercase">Laravel'<span class="text-violet-500">Storage</span></h1>
        <ul class="flex items-center gap-6 mr-4 text-lg font-semibold h-full">

            @auth
                <li class="h-full hover:border-b-2 hover:border-violet-500 hover:text-violet-500 transition-colors"><a
                        href="/files" class="h-full flex items-center">
                        <ion-icon name="documents-outline" class="text-3xl"></ion-icon>
                    </a></li>
                <form action="/logout" method="POST"
                    class="h-full hover:border-b-2 hover:border-violet-500 hover:text-violet-500 transition-colors">
                    @csrf
                    <a href="/logout" class="h-full flex items-center"
                        onclick="event.preventDefault();
                            this.closest('form').submit()">
                        <ion-icon name="exit-outline" size="large">Sair</ion-icon>
                    </a>
                </form>
            @endauth

            @guest
                <li class="h-full hover:border-b-2 hover:border-violet-500 hover:text-violet-500 transition-colors"><a
                        href="/" class="h-full flex items-center">Início</a></li>
                <li class="h-full hover:border-b-2 hover:border-violet-500 hover:text-violet-500 transition-colors"><a
                        href="/login" class="h-full flex items-center">Entrar</a></li>
                <li class="h-full hover:border-b-2 hover:border-violet-500 hover:text-violet-500 transition-colors"><a
                        href="/register" class="h-full flex items-center">Cadastrar</a></li>

            @endguest
        </ul>
    </nav>
    @yield('content')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>
