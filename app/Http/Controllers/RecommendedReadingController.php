<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class RecommendedReadingController extends Controller
{
    public function index(){
        return view('recommendedReads');
    }

    // index / show all the latest articles in each category
    public function indexChildrensBooks(){
        $childrenBookRelatedArticles = Articles::where('type', 'ChildrenBooks')->latest()->paginate(10);
        return view('childrenBooks',['childrenBookRelatedArticles' => $childrenBookRelatedArticles]);
    }

    public function indexFiction(){
        $fictionBookRelatedArticles = Articles::where('type', 'Fiction')->latest()->paginate(10);
        return view('fiction',['fictionBookRelatedArticles' => $fictionBookRelatedArticles]);
    }

    public function indexNonFiction(){
        $nonFictionRelatedArticles = Articles::where('type', 'NonFiction')->latest()->paginate(10);
        dd($nonFictionRelatedArticles);
        return view('nonFiction',['nonFictionRelatedArticles' => $nonFictionRelatedArticles]);
    }

    public function indexStem(){
        $stemRelatedArticles = Articles::where('type', 'Stem')->latest()->paginate(10);
        return view('stem', ['stemRelatedArticles' => $stemRelatedArticles]);
    }

    public function indexLiteraryAndArts(){
        $literaryAndArtRelatedArticles = Articles::where('type', 'LiteratureAndArts')->latest()->paginate(10);
        return view('literaryAndArts',['literaryAndArtRelatedArticles'=> $literaryAndArtRelatedArticles]);
    }









// show the individual Article
    public function showChildrensBooks(){
        $childrenBookRelatedArticles = Articles::where('type', 'childrenBooks')->latest()->paginate(10);
        return view('childrenBooks');
    }

    public function showFiction(){
        $fictionBookRelatedArticles = Articles::where('type', 'fictionBooks')->latest()->paginate(10);
        return view('fiction');
    }

    public function showNonFiction(){
        $nonFictionRelatedArticles = Articles::where('type', 'nonFictionBooks')->latest()->paginate(10);
        return view('nonFiction');
    }

    public function showStem(){
        $stemRelatedArticles = Articles::where('type', 'stemBooks')->latest()->paginate(10);
        return view('stem');
    }

    public function showLiteraryAndArts(){
        $literaryAndArtRelatedArticles = Articles::where('type', 'literaryAndArts')->latest()->paginate(10);
        return view('literaryAndArts');
    }

}
