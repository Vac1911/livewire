<x-app-layout>
  <x-slot name="header">
    <div class="flex justify-between">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Article List
    </h2>
      <a class="btn btn-purple" href="{{ route('articles.create') }}">
        Create Article
      </a>
    </div>
  </x-slot>
  
  <div class="container mx-auto mt-4">
    <livewire:article.article-browse />
  </div>
</x-app-layout>
