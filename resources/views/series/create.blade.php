<x-layout title='Nova Série'>
    <form action="{{ route('series.store') }}" method='POST'>
        @csrf

        <div class="flex w-full justify-between">
            <div class="flex flex-col mb-3">
                <label for="nome" class='text-xl text-gray-200'>Nome:</label>
                <input type="text"
                        autofocus
                        id='nome'
                        name='nome'
                        class='border border-gray-500 bg-gray-800 p-1 rounded-md text-white w-[550px]'
                        value="{{ old('nome') }}">
            </div>
            <div class="flex flex-col mb-5">
                <label for="seasonsQty" class='text-xl text-gray-200'>N° Temporadas:</label>
                <input type="text"
                        id='seasonsQty'
                        name='seasonsQty'
                        class='border border-gray-500 bg-gray-800 p-1 rounded-md  text-white'
                        value="{{ old('seasonsQty') }}">
            </div>
            
            <div class="flex flex-col mb-5">
                <label for="episodesPerSeason" class='text-xl text-gray-200'>Eps / Temporada:</label>
                <input type="text"
                        id='episodesPerSeason'
                        name='episodesPerSeason'
                        class='border border-gray-500 bg-gray-800 p-1 rounded-md  text-white'
                        value="{{ old('episodesPerSeason') }}">
            </div>
        </div>

        <button type='submit' class='cursor-pointer font-semibold bg-green-700 text-white rounded-md shadow-xl hover:shadow-sm p-2'>Adicionar</button>
    </form>
</x-layout>