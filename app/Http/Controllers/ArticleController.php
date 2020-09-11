<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

/**
 * Class ArticleController
 * @package App\Http\Controllers
 * @author Andrew <andrew@quasars.com>
 */
class ArticleController extends Controller
{
    static string $RESOURCE_MODEL = Article::class;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(Article $article)
    {
        return view('article.view')->with(compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Article::create($request->all());
        return redirect(route('home'))->with("alert", ['type' => 'success', 'msg' => 'Article Created']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(Article $article)
    {
        return view('article.edit')->with(compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return redirect(route('home'))->with("alert", ['type' => 'success', 'msg' => 'Article Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->back()->with("alert", ['type' => 'success', 'msg' => 'Article Deleted']);
    }

    /**
     * Restore the specified soft deleted model.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(int $id)
    {
        Article::withTrashed()->findOrFail($id)->restore();
        return redirect()->back()->with("alert", ['type' => 'success', 'msg' => 'Article Restored']);
    }
}
