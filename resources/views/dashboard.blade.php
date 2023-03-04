<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-bold text-2xl bg-clip-text text-transparent bg-gradient-to-r from-violet-500 to-zinc-300 leading-tight">
            {{ __('Lista de Arquivos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-zinc-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
