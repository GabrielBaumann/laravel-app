<form action="{{ $action }}" method='POST'>
    @csrf

    @if($update)
    @method('PUT')
    @endif
    <div class="flex flex-col mb-5">
        <label for="nome" class='text-xl text-gray-200'>Nome:</label>
        <input type="text" 
                id='nome' 
                name='nome' 
                class='border border-gray-500 p-1 rounded-md  text-white'
                @isset($nome)value="{{ $nome }}"@endisset>
    </div>
    <button type='submit' class='cursor-pointer font-semibold bg-green-700 text-white rounded-md shadow-xl hover:shadow-sm p-2'>Adicionar</button>
</form>