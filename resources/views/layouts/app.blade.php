<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/output.css" rel="stylesheet">

    @yield('styles')
    
    <title>Laravel task list app</title>

    <script src="//unpkg.com/alpinejs" defer></script>

</head>
<body class='container mx-auto mt-10 mb-10 max-w-lg '>
    <h1 class="text-4xl mb-4 font-bold">@yield('title')</h1>
    
    <div x-data='{flash: true}'>
        @if (session()->has('success'))
            <div x-show='flash' class='rounded border-green-700 mb-10 border bg-green-100 px-4 py-3 text-lg text-green-700 relative' role="alert">
                {{ session('success') }}
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="flash = false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" @click="flash = false"
                        stroke="currentColor" class="h-6 w-6 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>