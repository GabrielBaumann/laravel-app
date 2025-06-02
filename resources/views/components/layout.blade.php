<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" /> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>{{ $title }}</title>
</head>
<body class='bg-gray-900'>
    <header class='bg-gray-800 p-4 flex border-b border-gray-700'>
        <div class="max-w-[960px] mx-auto">
            <h1 class='text-xl text-gray-300'>Full Stack PHP Laravel</h1>
        </div>
    </header>
    <div class="h-full max-w-[960px] mx-auto">
        <div class='p-4'>
        
            {{ $slot }}
        </div>
    </div>
</body>
</html>