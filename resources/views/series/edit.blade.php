<x-layout title="Editar Série '{{ $serie->nome }}'">
    <header>
        <h2 class='mb-5 text-md text-blue-500'>Página Principal > Adicionar uma nova Série</h2>
        <h2 class='text-4xl mb-5 text-gray-800'>Editar série '{{ $serie->nome }}'</h2>
    </header>
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome"/>
</x-layout>