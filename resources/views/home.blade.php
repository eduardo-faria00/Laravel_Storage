@extends('layouts.main')

@section('title', 'Laravel\'Storage')

@section('content')
    <div class="w-full flex flex-col items-center justify-center py-10">
        <h1 class="font-bold text-4xl mb-8">Laravel'<span
                class="bg-clip-text text-transparent bg-gradient-to-r from-violet-900 to-violet-500">Storage</span></h1>
        <p class="text-zinc-400">Um sistema para upload de arquivos desenvolvido com laravel. Faça <a href="/user/login"
                class="text-violet-300">login</a> ou <a href="/user/create" class="text-violet-300">crie uma conta</a> para
            utilizar</p>
    </div>
@endsection
