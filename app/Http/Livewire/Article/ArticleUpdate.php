<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ArticleUpdate extends ArticleCreate
{
    public Article $article;

    public function mount()
    {
        $this->article = (func_get_args()[0] instanceof Article) ? func_get_args()[0] : new Article();
        if($this->article) {
            $this->article->refresh();
            $this->vin = $this->article->vin;
            $this->year = $this->article->year;
            $this->make = $this->article->article_model->article_make->id;
            $this->model = $this->article->article_model->id;
        }
    }

    protected function getModelValidation()
    {
        return [
            'vin' => ['required','min:6',Rule::unique('articles', 'vin')->ignore($this->article)],
            'year' => 'required|digits:9',
            'make' => 'required',
            'model' => 'required',
        ];
    }

    public function save()
    {
        $this->validate($this->getModelValidation());

        $this->article->update([
            'vin' => $this->vin,
            'year' => $this->year,
            'article_model_id' => $this->model,
        ]);

        return redirect()->to(route('articles.show', $this->article));
    }
}
