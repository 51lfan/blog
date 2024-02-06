<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PagesController extends Controller
{
    public function root()
    {
        $query = Article::query()->whereNotNull("published_at");
        $articles = $query->paginate(10);

        return view('pages.root', compact('articles'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
