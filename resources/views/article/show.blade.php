<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      View Article
    </h2>
  </x-slot>
  
  <div class="container mx-auto">
    <div class="bg-white m-8 p-8 overflow-hidden shadow-xl sm:rounded-lg">
      <div class="flex justify-between mb-4">
        <a class="btn btn-gray" href="{{ route('articles.index') }}">
          List
        </a>
        <a class="btn btn-yellow" href="{{ route('articles.edit', $article) }}">
          Edit
        </a>
      </div>
      <div class="form-group">
        <label>VIN</label>
        <div>{{ $article->vin }}</div>
      </div>
      <div class="form-group">
        <label>Year / Make / Model</label>
        <div>{{ $article->year }} {{ $article->article_make->name }} {{ $article->article_model->name }}</div>
      </div>
      <livewire:article.instance-browse :article="$article" />
    </div>
  </div>
</x-app-layout>
