<x-layout title="Editar Série '{{ $serie->nome }}'">
    <header>
        <h2 class='text-4xl mb-5 text-gray-200'>Editar série '{{ $serie->nome }}'</h2>
    </header>

    <form action="{{ route('series.update', $serie->id) }}" method='POST'>
        @csrf

        <div class="flex flex-col mb-5">
            <label for="nome" class='text-xl text-gray-200'>Nome:</label>
            <input type="text" 
                    id='nome' 
                    name='nome' 
                    class='border border-gray-500 p-1 rounded-md  text-white'
                    value="{{ $serie->nome }}">
        </div>

        <button type='submit' class='cursor-pointer font-semibold bg-green-700 text-white rounded-md shadow-xl hover:shadow-sm p-2'>Adicionar</button>
    </form>
</x-layout>