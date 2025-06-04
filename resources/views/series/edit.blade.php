<x-layout title="Editar Série '{{ $serie->nome }}'">
    <header>
        <h2 class='text-4xl mb-5 text-gray-200'>Editar série '{{ $serie->nome }}'</h2>
    </header>
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" :update="true"/>
</x-layout>