<x-layout title='Nova Série'>
    <header>
        <h2 class='mb-5 text-md text-blue-500'>Página Principal > Adicionar uma nova Série</h2>
    </header>
    <x-series.form :action="route('series.store')"/>
</x-layout>