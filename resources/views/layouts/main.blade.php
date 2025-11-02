<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>@yield('judul') | e-Library</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    @include('shared.navigation.header')
    @include('shared.navigation.navbar')
    
    <div class="flex flex-1">
        @if(!in_array(Route::currentRouteName(), ['login', 'register', 'password.request']))
            @include('shared.navigation.sidebar')
        @endif
        
        <main class="flex-1 {{ in_array(Route::currentRouteName(), ['login', 'register', 'password.request']) ? 'w-full' : '' }}">
            @yield('konten')
        </main>
    </div>
    
    @include('shared.navigation.footer')
</body>
</html>