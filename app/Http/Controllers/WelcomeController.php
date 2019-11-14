<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Article;
use App\Section;

class WelcomeController extends Controller {
    
    private $dayInSecond = 86400;
    private $quantityDay = 70;


    public function index(Request $request) {
        $currentDate = date("Y-m-d H:i:s", time() - $this->quantityDay * $this->dayInSecond);
    	$bestNews = Article::where('created_at', '>', $currentDate)->orderBy('ranking')->take(3)->get();
        $newNews = Article::orderBy('id', 'desc')->paginate(3);
        $currentSection = Section::find(1);

    	return view('welcome')->with([
            'path' => $request->path(),
    		'title' => 'Главная',
    		'user' => Auth::user(),
    		'newNews' => $newNews,
    		'bestNews' => $bestNews,
            'secondMenu' => $currentSection,
            'countries' => $currentSection->sports[0]->countries,
    	]);
    }
}
