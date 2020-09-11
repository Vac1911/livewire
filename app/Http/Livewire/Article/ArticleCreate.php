<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use App\Models\ArticleMake;
use Livewire\Component;

class ArticleCreate extends Component
{
    public $vin;
    public $year;
    public $make;
    public $model;

    public function updated($propName)
    {
        $this->validateOnly($propName, $this->getModelValidation());
        if($propName == 'make')
            $this->model = null;
    }

    protected function getModelValidation()
    {
        return [
            'vin' => ['required','min:6', 'unique:App\Models\Article,vin'],
            'year' => 'required|digits:4',
            'make' => 'required',
            'model' => 'required',
        ];
    }

    public function save()
    {
        $this->validate($this->getModelValidation());

        $article = Article::create([
            'vin' => $this->vin,
            'year' => $this->year,
            'article_model_id' => $this->model,
        ]);

        return redirect()->to(route('articles.show', $article));
    }

    public function getOptions() {
        return [
            'make_options' => ArticleMake::all(),
            'model_options' => $this->make ? optional(ArticleMake::find($this->make))->article_models : collect([]),
        ];
    }

    public function render()
    {
        return view('livewire.article.article-form', $this->getOptions());
    }
}
