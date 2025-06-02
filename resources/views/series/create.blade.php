<x-layout title='Nova Série'>
    <header>
        <h2 class='mb-5 text-md text-blue-500'>Página Principal > Adicionar uma nova Série</h2>
    </header>
    <form action="{{ route('series.store') }}" method='POST'>
        @csrf
        <div class="flex flex-col mb-5">
            <label for="nome" class='text-xl text-gray-200'>Nome:</label>
            <input type="text" id='nome' name='nome' class='border border-gray-600 p-1 rounded-md bg-gray-700 text-white'>
        </div>
        <button type='submit' class='cursor-pointer font-semibold bg-green-700 text-white rounded-md shadow-xl hover:shadow-sm p-2'>Adicionar</button>
    </form>
</x-layout>