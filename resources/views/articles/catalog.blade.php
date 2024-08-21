@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Каталог статей</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($articles as $article)
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
                <p class="mt-2 text-gray-600">{{ Str::limit($article->body, 150) }}</p>
                <a href="{{ route('articles.show', $article->id) }}" class="text-blue-500 mt-4 block">Читать далее</a>
                <div class="flex items-center justify-between text-gray-600 text-sm">
                    <span>{{ $article->created_at->format('d.m.Y') }}</span>
                    <span class="ml-3">{{ $article->views }} просмотров</span>
                </div>
            </div>
        @endforeach
    </div>

   <div class="mt-8 flex justify-center">
       <div class="flex items-center space-x-2">
           {{ $articles->onEachSide(1)->links('pagination::tailwind-custom') }}
       </div>
   </div>



@endsection
