<div>
    <div class="mb-2">
        <input class="form-control border-secondary" wire:model="search" type="text" placeholder="Search for an article!">
    </div>
    @if(strlen($search))
        <ul class="list-group border-secondary" style="border-radius: 0;" wire:loading.remove>
            @if($articles->count())
                @foreach($articles as $article)
                    <li class="list-group-item border-secondary">{{ $article->title }}</li>
                @endforeach
            @else
                <li class="list-group-item border-secondary">No Results</li>
            @endif
        </ul>
        @if($articles->count() < $count)
            <div class="mt-3" wire:loading.remove><button type="button" class="btn btn-sm btn-primary">See All {{ $count }} Results</button></div>
        @endif
        <div wire:loading>
            Searching...
        </div>
    @endif
</div>
