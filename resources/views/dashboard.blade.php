<x-app-layout>
    <x-slot name="header">
        <h2
            class="font-bold text-2xl bg-clip-text text-transparent bg-gradient-to-r from-violet-500 to-zinc-300 leading-tight">
            {{ __('Lista de Arquivos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (count($files) == 0)
                <div class="w-full flex justify-center items-center mt-3">
                    <h1 class="text-4xl font-bold text-zinc-100">Ainda não foi adicionado nenhum arquivo!</h1>
                </div>
            @else
                @foreach ($files as $file)
                    <div class="dark:bg-zinc-800 overflow-hidden shadow-xl sm:rounded-lg grid grid-cols-4 gap-2 p-2">
                        <div class="bg-zinc-600 px-4 py-2 rounded-md">
                            <h1 class="text-zinc-100 font-semibold text-xl">{{ $file->name }}</h1>
                            <h2 class="text-zinc-400">Por: <span>{{ $file->uploaded_by }}</span></h2>

                            <div class="flex gap-3 text-2xl">
                                <a href="/files/download/{{ $file->name }}"
                                    class="text-blue-500 hover:text-blue-600 transition-colors">
                                    <ion-icon name="download-outline"></ion-icon>
                                </a>
                                @if (auth()->user()->id == $file->user_id)
                                    <form action="/files/{{ $file->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-500 hover:text-red-600 transition-colors">
                                            <ion-icon name="trash-bin-outline"></ion-icon>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            {{-- lista de arquivos aqui --}}
        </div>
    </div>
</x-app-layout>
