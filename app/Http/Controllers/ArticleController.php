<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function home()
{
    $articles = Article::latest()->take(6)->get();

    return view('welcome', compact('articles'));
}


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::all();
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags=Tag::all();
         return view('articles.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $article = Article::create([
        'title' => $request->title,
        'description' => $request->description,
        'content' => $request->content,
    ]);

    $article->tags()->attach($request->input('tag', []));

    return redirect(route('articlesIndex'));
}

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.detail',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {   
        $tags=Tag::all();
        return view('articles.edit',compact('article','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'content'=>$request->content,

        ]);
         
        $article->tags()->sync($request->input('tag', []));

        return redirect(route('articlesShow',compact('article')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {     
        $article->tags()->detach();
        $article->delete();
        return redirect(route('articlesIndex'));
    }
}
