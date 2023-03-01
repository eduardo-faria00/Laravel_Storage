@extends('layouts.main')

@section('title', 'Adicionar Arquivo')

@section('content')
    <div class="w-full flex flex-col justify-center items-center p-10">
        <h1 class="font-bold text-3xl bg-clip-text text-transparent bg-gradient-to-r from-violet-500 to-zinc-300">Adicionar
            um arquivo</h1>
        <form action="/files" method="POST" enctype="multipart/form-data"
            class="flex flex-col bg-zinc-800 p-4 rounded-md gap-1 w-auto">
            @csrf
            <label class="mt-3 font-semibold text-zinc-300" for="file">Adicione um arquivo:</label>
            <input
                class="bg-zinc-700 px-1 py-1 rounded-md focus:outline-none focus:outline-1 focus:outline-zinc-600 placeholder:text-zinc-500"
                type="file" name="file">

            <button type="submit"
                class="mt-6 p-1 rounded-md bg-green-600 font-bold hover:bg-green-700 transition-colors">Adicionar</button>
        </form>
    </div>
@endsection
