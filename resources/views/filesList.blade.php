@extends('layouts.main')

@section('title', 'Laravel\'Storage')

@section('content')
    <div class="flex flex-col p-4 gap-2">
        <div class="flex bg-zinc-800 p-2 rounded-md justify-between">
            <h1 class="font-bold text-3xl bg-clip-text text-transparent bg-gradient-to-r from-violet-500 to-zinc-300">
                lista de arquivos</h1>
            <a href="/files/add"
                class="bg-green-600 hover:bg-green-700 transition-colors py-1 px-3 flex items-center justify-center rounded-md font-bold">
                <ion-icon name="add-outline" class="text-2xl"></ion-icon>Adicionar
                Arquivo
            </a>
        </div>
        <ul class="flex gap-2 flex-wrap">
            @foreach ($files as $file)
                <li
                    class="bg-zinc-700 w-1/4 min-h-16 box-border rounded-md p-2 flex flex-col justify-between items-center cursor-pointer gap-2">
                    <p class="text-center">{{ $file }}</p>
                    <div class="flex items-center gap-3 text-2xl">
                        <a href="" class="text-green-500">
                            <ion-icon name="download-outline"></ion-icon>
                        </a>
                        <a href="" class="text-red-500">
                            <ion-icon name="trash-bin-outline"></ion-icon>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
