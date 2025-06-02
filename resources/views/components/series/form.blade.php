<form action="{{ $action }}" method='POST'>
    @csrf

    @isset($nome)
    @method('PUT')
    @endisset
    <div class="flex flex-col mb-5">
        <label for="nome" class='text-xl text-gray-800'>Nome:</label>
        <input type="text" 
                id='nome' 
                name='nome' 
                class='border border-gray-500 p-1 rounded-md  text-black'
                @isset($nome)value="{{ $nome }}"@endisset>
    </div>
    <button type='submit' class='cursor-pointer font-semibold bg-green-700 text-white rounded-md shadow-xl hover:shadow-sm p-2'>Adicionar</button>
</form>