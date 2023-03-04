<x-app-layout>
    <div class="w-full flex justify-center">

        <form action="/files" method="POST" class="bg-zinc-800 rounded-md p-6 flex flex-col mt-6"
            enctype="multipart/form-data">
            @csrf
            <label for="file" class="text-zinc-100 text-xl font-semibold mb-2">Adicione um arquivo</label>
            <input name="file" type="file"
                class="text-zinc-500 file:mr-2 file:bg-zinc-700 file:text-zinc-100 file:outline-none file:border-none file:rounded-md file:p-2">

            <button type="submit"
                class="bg-violet-500 p-2 rounded-md mt-3 text-white font-semibold text-xl">Adicionar</button>
        </form>

    </div>
</x-app-layout>
