<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class ArticleCreate extends Component
{
    public $title;
    public $body;

    public function updated($propName)
    {
        $this->validateOnly($propName, $this->getModelValidation());
    }

    protected function getModelValidation()
    {
        return [
            'title' => ['required','min:6'],
            'body' => 'required',
        ];
    }

    public function save()
    {
        $this->validate($this->getModelValidation());

        $article = Article::create([
            'title' => $this->title,
            'body' => $this->body,
            'author_id' => \Auth::user()->id
        ]);

        return redirect()->to(route('articles.show', $article));
    }

    public function getOptions() {
        return [
        ];
    }

    public function render()
    {
        return view('livewire.article.article-form', $this->getOptions());
    }
}
