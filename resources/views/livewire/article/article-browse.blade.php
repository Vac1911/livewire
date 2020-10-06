<div>
  <div>
    @foreach(App\Models\Tag::all() as $tag)
      <button class="p-2 btn @if(in_array($tag->name, $tags)) btn-blue @else btn-gray @endif" wire:click="toggleTag('{{ $tag->name }}')">{{ $tag->name }}</button>
    @endforeach
  </div>
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 my-5">
    @foreach($articles as $article)
        <div class="article">
          <img class="w-full" src="{{ $article->cover_photo_url }}" onerror="if (this.src != '{{ asset('img/placeholder.jpg') }}') this.src = '{{ asset('img/placeholder.jpg') }}';" alt="Not Available">
          <div class="px-6 py-4">
            <div class="mb-1">
              @foreach($article->tags as $tag)
                <span class="badge mr-1">{{ $tag->name }}</span>
              @endforeach
            </div>
            <div class="article-title">{{ $article->title }}</div>
            <div class="article-meta"><span>By {{ $article->author->name }}</span><span>{{ $article->created_at->diffForHumans() }}</span></div>
            <p class="article-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
          </div>
          <div class="px-6 pb-4 flex-grow flex items-end">
            <a class="text-xs" href="{{ route('articles.show', $article) }}">
              More
            </a>
          </div>
        </div>
    @endforeach
  </div>
  {{ $articles->links() }}
</div>
