<x-app-layout>
  <x-slot name="header">
    <div class="flex justify-between">
      <a class="btn btn-gray" href="{{ route('articles.index') }}">
        List
      </a>
      <a class="btn btn-yellow" href="{{ route('articles.edit', $article) }}">
        Edit
      </a>
    </div>
  </x-slot>
  
  <div class="container mx-auto">
    <div class="bg-white m-8 p-8 overflow-hidden shadow-xl sm:rounded-lg">
      <section class="mb-6">
      <div class="mb-3">
        @foreach($article->tags as $tag)
          <span class="badge mr-1">{{ $tag->name }}</span>
        @endforeach
      </div>
      <div class="article-header">{{ $article->title }}</div>
      <div class="flex justify-between mb-4">
        <a href="#" class="font-semibold no-underline hover:underline text-blue-500 hover:text-blue-700">{{ $article->author->name }}</a>
        <div class="text-gray-700">{{ $article->created_at->diffForHumans() }}</div>
      </div>
      <img class="w-1/2 mx-auto" src="{{ $article->cover_photo_url }}" onerror="if (this.src != '{{ asset('img/placeholder.jpg') }}') this.src = '{{ asset('img/placeholder.jpg') }}';" alt="Not Available">
      </section>
      <article>
        {!! $article->body !!}
      </article>
    </div>
  </div>
</x-app-layout>
