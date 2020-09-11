<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleBrowse extends Component
{
    use WithPagination;

    public array $tags = [];

    const PAGE_LEN = 9;

//    protected $queryString = ['tags'];

    public function toggleTag($tag)
    {
        if(!in_array($tag, $this->tags))
            array_push($this->tags, $tag);
        else
            unset($this->tags[array_search($tag, $this->tags)]);
        $this->tags = array_values($this->tags);
        $this->resetPage();
    }

    protected function getArticles()
    {
        $query = Article::orderBy('created_at', 'desc');
        if(count($this->tags))
            $query = $query->whereHas('tags', function ($query) {
                $query->whereIn('name', $this->tags);
            });

        return $query->paginate(self::PAGE_LEN);
    }

    public function render()
    {
        return view('livewire.article.article-browse', [
            'articles' => $this->getArticles(),
            'tags' => $this->tags,
        ]);
    }
}
