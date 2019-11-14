@extends('templates.template')

@section('main')     

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark hr">
        <!-- <a class="navbar-brand" href="#">BetConsult</a> -->
        <div class="container">     
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	          <ul class="navbar-nav mr-auto">
	          	@foreach($secondMenu->sports as $menuItem)
	          		@if( $menuItem->id > 0 && $menuItem->id < 5)
			            <li class="nav-item {{ strpos($path, 'category/' . $menuItem->id) === 0 ? 'active' : '' }}">
			              <a  class="nav-link nav-second-my" href="{{ url('/category/' . $menuItem->id) }}">{{ $menuItem->name }}</a>
			            </li>
		            @elseif($menuItem->id >= 5)
			            <li class="nav-item {{ strpos($path, 'category/5') === 0 ? 'active' : '' }}">
			              <a  class="nav-link nav-second-my" href="{{ url('/category/5') }}">{{ "Другие" }}</a>
			            </li>
		            @endif
	            @endforeach
	          </ul>
	         

	          <form class="form-inline my-2 my-lg-0" action="{{ url('/search') }}">
	            <input class="form-control mr-sm-2" type="search" name="value" placeholder="Search.." aria-label="Search..">
	            <button class="btn btn-dark btn-lg" type="submit">
	              <span class="glyphicon glyphicon-search"></span>
	            </button>
	          </form>

	        </div>
        </div>
  </nav>

	<aside class="container-fluid">
		<div class="row">
			<div class="col-md-2 left-sidebar">

	        @for($i = 0; $i < count($countries); $i++)
	          <a href="{{ asset('/category/'. ($countries[$i]->sport_id <= 4 ? $countries[$i]->sport_id : 5 ).'/' . $countries[$i]->id) }}" class="text-dark text-center {{ strpos($path, 'category/' . $countries[$i]->sport_id .'/' . $countries[$i]->id) === 0 ? 'disabled' : '' }}" >
	          	<h2 class="">{{ $countries[$i]->name }}</h2>
	          </a>

	          @if(($i+1) % 3 == 0)
	            <p>
	            	<a href="/">
	            		<img class="second-banner" src="{{ asset('images/banner.jpg') }}">
	            	</a>
	            </p>
	          @endif
	        @endfor

			</div>
		<div class="col-md-7 main-content">
        <div id="carouselBestNews" class="carousel slide carousel-self-update" data-ride="carousel">
          <div class="carousel-inner">
            @for($i = 0; $i < count($bestNews); $i++)
              <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                <div class="carousel-element">
                  <a href="/news/{{ $bestNews[$i]->id }}"><img class="best-news-photo" src="/images/new{{ $i+1 }}.jpg" alt="{{ $bestNews[$i]->title }}"></a>
                  <div class="carousel-message">
                    <h2 class="carousel-message-title display-4 text-light">
                      <a href="/news/{{ $bestNews[$i]->id }}" class="text-light">{{ $bestNews[$i]->title }}</a>
                    </h2>
                    <p class="carousel-message-short text-light">
                      {{ $bestNews[$i]->short }}
                    </p>
                  </div>
                </div>
              </div>
            @endfor

          </div>
          <a class="carousel-control-prev" href="#carouselBestNews" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon carousel-move"  aria-hidden="true"></span>
            <span class="sr-only">Previous</span> 
          </a>

          <a class="carousel-control-next" href="#carouselBestNews" role="button" data-slide="next">
            <span class="carousel-control-next-icon carousel-move" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="pages-news">
          <h2 class="h2 full-title text-light">Последние новости</h2>
          <div class="new-news">
            <div class="container">
              @foreach ($newNews as $article)
                <div class="row one-article">
                  <div class="col-md-4">
                    <a href="/news/{{ $article->id }}"><img class="new-news-photo" src="/images/new1.jpg" alt="{{ $article->title }}"></a>
                  </div>
                  <div class="col-md-8">
                    <a href="/news/{{ $article->id }}" class="text-dark"><h2 class="h2">{{ $article->title }}</h2></a>
                    <p class="">{{ $article->short }}</p>
                    <p class="date">{{ $article->created_at }}</p>
                  </div>
                </div>
              @endforeach
            </div>
            <div class="links-pagginate">
              {{ $newNews->render() }}
            </div>
          </div>  
        </div>
			</div>
      <div class="col-md-3">
        @for($i = 0; $i < 3; $i++)
          <a href="/"><img class="second-banner" src="{{ asset('images/banner.jpg') }}"></a>
        @endfor
      </div>
    </div>
	</aside>
  
	
@endsection