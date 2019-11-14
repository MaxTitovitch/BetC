<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Article;
use App\Country;
use App\Section;

class CategoryController extends Controller {
    
    private $dayInSecond = 86400;
    private $quantityDay = 70;


    public function index(Request $request, $sportId, $countryId = 0) {

        $currentDate = date("Y-m-d H:i:s", time() - $this->quantityDay * $this->dayInSecond);
        if($countryId != 0) {
	    	$bestNews = Article::where('created_at', '>', $currentDate)->where('country_id', '=', $countryId)->orderBy('ranking')->take(3)->get();
    		$newNews = Article::orderBy('id', 'desc')->where('country_id', '=', $countryId)->paginate(3);
	    } else {
	    	if($sportId != 5) {
		    	$bestNews = Article::where('articles.created_at', '>', $currentDate)->join('countries', 'countries.id', '=', 'articles.country_id')->where('sport_id', '=', $sportId)->orderBy('ranking')->take(3)->get();
	        	$newNews = Article::orderBy('articles.id', 'desc')->join('countries', 'countries.id', '=', 'articles.country_id')->where('sport_id', '=', $sportId)->paginate(3);
	        } else {
		    	$bestNews = Article::where('articles.created_at', '>', $currentDate)->join('countries', 'countries.id', '=', 'articles.country_id')->where('sport_id', '>', 4)->orderBy('ranking')->take(3)->get();
	        	$newNews = Article::orderBy('articles.id', 'desc')->join('countries', 'countries.id', '=', 'articles.country_id')->where('sport_id', '>', 4)->paginate(3);
	        }
	    }


        $currentSection = Section::find(1);
        $countries = $sportId > 4 ? $this->getCountries($currentSection->sports) : $currentSection->sports[$sportId - 1]->countries;

    	return view('welcome')->with([
            'path' => $request->path(),
    		'title' => 'Новости категории "' . ($sportId <= 4 ? $currentSection->sports[$sportId-1]->name : 'Другое') . '"',
    		'user' => Auth::user(),
    		'newNews' => $newNews,
    		'bestNews' => $bestNews,
            'secondMenu' => $currentSection,
            'countries' => $countries,
    	]);
    }

    public function getCountries($sports){
    	$countries = [];
    	for ($i=0; $i < count($sports); $i++) { 
    		if($sports[$i]->id > 4){
    			$sportCountries = $sports[$i]->countries;
    			for ($j=0; $j < count($sportCountries); $j++) { 
    				$countries[] = $sportCountries[$j];
    			}
    		}
    	}
    	return $countries;
    }


}
