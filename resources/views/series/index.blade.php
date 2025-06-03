<x-layout title='Séries'>
    <div class="mt-3 flex justify-between mb-5 items-center">
        <h1 class='text-3xl text-gray-300 font-semibold'>Lista de Séries</h1>
        <a href="{{ route('series.create') }}" class='font-semibold bg-green-700 text-white rounded-md shadow-xl hover:shadow-sm p-2'>Nova Série</a>
    </div>

    @isset($mensagemSucesso)
    <div class='flex gap-5 mb-5 text-md mt-5 p-5 bg-green-200 border border-green-500 text-green-900 rounded-md'>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
        </svg>
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <div>
        <ul class='border border-b-0 border-gray-700 rounded-xl overflow-hidden bg-gray-800'>
            @foreach ($series as $serie)
            <li class='flex items-center justify-between transition-all hover:bg-gradient-to-r from-gray-700 to-gray-900 hover:shadow-xl p-2 text-md text-gray-200 border-b border-gray-700'>{{ $serie->nome }}
                <span class='flex items-center gap-5'>
                    <a href="{{ route('series.edit', $serie->id) }}" class='cursor-pointer hover:underline text-sm text-yellow-600 hover:text-yellow-500'>Editar</a>
                    <form action="{{ route('series.destroy', $serie->id) }}" method='post'>
                        @csrf
                        @method('DELETE')
                        <button class='cursor-pointer hover:underline text-sm text-red-700 hover:text-red-500'>Excluir</button>
                    </form>
                </span>
            </li>
            @endforeach
        </ul>
    </div>
</x-layout>