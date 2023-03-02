@extends('layouts.main')

@section('title', 'Laravel\'Storage')

@section('content')
    <div class="w-full flex flex-col items-center justify-center py-10">
        <h1 class="font-bold text-4xl mb-2">Laravel'<span
                class="bg-clip-text text-transparent bg-gradient-to-r from-violet-900 to-violet-500">Storage</span></h1>
        <div class="flex flex-col items-center justify-center bg-zinc-800 rounded-md p-4 w-1/4">
            <p class="text-zinc-400 text-center text-2xl">Um sistema para upload de arquivos desenvolvido com laravel. Faça
                <a href="/login" class="text-violet-300">login</a> ou <a href="/register" class="text-violet-300">crie uma
                    conta</a> para
                utilizar</p>
        </div>
    </div>
@endsection
