<x-layout title='Temporadas de {!! $series->nome !!}'>
    <div class='mb-5'>
        <h1 class='text-gray-200 text-3xl font-semibold'>Temporadas de '{!! $series->nome !!}'</h1>
    </div>
    <div>
        <ul class='border border-b-0 border-gray-700 rounded-xl overflow-hidden bg-gray-800'>
            @foreach ($seasons as $season)
            <li class='flex items-center justify-between transition-all hover:bg-gray-700 hover:shadow-xl p-2 text-md text-gray-200 border-b border-gray-700'>
                Temporada {{ $season->number }}
                <span class='flex items-center gap-5'>
                    {{ $season->episodes->count() }} Episódios 
                </span>
            </li>
            @endforeach
        </ul>
    </div>
</x-layout>