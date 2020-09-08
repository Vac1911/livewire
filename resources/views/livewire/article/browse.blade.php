<div class="article py-5">
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @foreach(App\Tag::all() as $tag)
                <button class="p-2 btn @if(in_array($tag->name, $tags)) btn-dark @else btn-outline-primary @endif" wire:click="toggleTag('{{ $tag->name }}')">{{ $tag->name }}</button>
            @endforeach
        </nav>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-6">

                    <div class="card mb-6" wire:loading.remove>
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        <div class="card-body card-article py-5">
{{--                            <strong class="d-inline-block mb-2 text-primary">{{ $article->tags }}</strong>--}}
                            {{ $article->tags->pluck('name')->join(', ') }}
                            <h3 class="card-title mb-3">{{ $article->title }}</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-6 w-100" wire:loading>
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><rect width="100%" height="100%" fill="#55595c"/>
{{--                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>--}}
                        </svg>
                        <div class="card-body card-article py-5">
                            <strong class="d-inline-block mb-2 text-primary">-</strong>
                            <h3 class="card-title mb-3">-</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">-</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $articles->links() }}
    </div>
</div>
