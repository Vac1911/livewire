<?php

namespace App\Http\Livewire\Article;

use App\Article;
use Livewire\Component;

class Search extends Component
{
    public string $search = '';

    protected $queryString = ['search'];

    const MAX_RESULTS = 4;

    protected function getArticles()
    {
        $query = Article::query();
        if(strlen($this->search))
            $query = $query->where('title', 'like', '%'.$this->search.'%');

        return [$query->take(self::MAX_RESULTS)->get(), $query->count()];
    }

    public function render()
    {
        [$results, $count] = $this->getArticles();
        return view('livewire.article.search', [
            'articles' => $results,
            'count' => $count,
        ]);
    }
}
