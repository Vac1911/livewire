<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Create Article
    </h2>
  </x-slot>
  
  <div class="container mx-auto">
    <div class="bg-white m-8 p-8 overflow-hidden shadow-xl sm:rounded-lg">
      <livewire:article.article-create />
      <div class="flex justify-between mt-8">
        <a class="btn btn-gray" href="{{ url()->previous() }}">
          Cancel
        </a>
        <button type="submit" form="update-form" class="btn btn-blue">
          Create Article
        </button>
      </div>
    </div>
  </div>
</x-app-layout>
