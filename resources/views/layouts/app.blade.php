<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Мой сайт')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
<header class="bg-white shadow-md p-4">
    <nav class="container mx-auto flex justify-between">
        <ul class="flex space-x-4">
            <li>
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'text-white bg-blue-500' : 'text-gray-700 hover:text-blue-500' }} px-3 py-2 rounded-lg">
                   Главная
                </a>
            </li>
            <li>
                <a href="{{ route('articles.catalog') }}"
                   class="{{ request()->routeIs('articles.catalog') ? 'text-white bg-blue-500' : 'text-gray-700 hover:text-blue-500' }} px-3 py-2 rounded-lg">
                   Все статьи
                </a>
            </li>
        </ul>
    </nav>
</header>

    <main class="container mx-auto mt-8">
        @yield('content')
    </main>

    <footer class="bg-white shadow-md text-center py-4 mt-8">
        <p class="text-gray-600">© 2024 Мой сайт. Все права защищены.</p>
    </footer>
</body>
</html>
