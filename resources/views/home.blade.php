<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 text-gray-900">
<!-- resources/views/components/header.blade.php -->
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

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6">Последние добавленные статьи (Главная)</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($articles as $article)
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
                    <p class="mt-2 text-gray-600">{{ \Illuminate\Support\Str::limit($article->body, 150) }}</p>
                    <a href="{{ route('articles.show', $article->id) }}" class="text-blue-500 mt-4 block">Читать далее</a>
                     <div class="flex items-center JUSTIFY-BETWEEN justify-between text-gray-600 text-sm" style='justify-content: space-between;'>
                        <span>{{ $article->created_at->format('d.m.Y') }}</span>
                        <span class="ml-3">{{ $article->views }} просмотров</span>
                     </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
