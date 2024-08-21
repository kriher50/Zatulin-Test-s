@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-4">{{ $article->title }}</h1>
        <div class="article-cover mb-4">
            <img src="{{ $article->cover_image }}" alt="{{ $article->title }}" class="w-full h-auto rounded-lg">
        </div>
        <div class="article-body text-gray-800 mb-6">
            <p>{{ $article->body }}</p>
        </div>
        <div class="article-meta flex items-center justify-between text-gray-600 text-sm mb-6">
            <span>Просмотры: {{ $article->views }}</span>
            <span>Лайки: {{ $article->likes }}</span>
        </div>
        <div class="tags mb-6">
            @foreach($article->tags as $tag)
                <span class="inline-block bg-gray-200 text-gray-700 rounded-full px-3 py-1 text-sm font-semibold mr-2">{{ $tag->name }}</span>
            @endforeach
        </div>

        <div class="comments">
            <h3 class="text-xl font-semibold mb-4">Комментарии</h3>
            <form action="{{ route('comments.store', $article->id) }}" method="POST" class="mb-4">
                @csrf
                 <textarea name="comment" rows="4" class="w-full p-3 border bg-gray-100 mb-4"></textarea>
                  <div class="flex justify-center">
                  <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md">Отправить</button>
                  </div>
            </form>
        </div>
    </div>
@endsection
