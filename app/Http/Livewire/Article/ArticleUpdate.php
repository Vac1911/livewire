<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use Illuminate\Validation\Rule;

class ArticleUpdate extends ArticleCreate
{
    public Article $article;

    public function mount()
    {
        $this->article = (func_get_args()[0] instanceof Article) ? func_get_args()[0] : new Article();
        if($this->article) {
            $this->article->refresh();
            $this->title = $this->article->title;
            $this->body = $this->article->body;
        }
    }

    public function save()
    {
        $this->validate($this->getModelValidation());

        $this->article->update([
            'title' => $this->title,
            'body' => $this->body,
        ]);

        return redirect()->to(route('articles.show', $this->article));
    }
}
