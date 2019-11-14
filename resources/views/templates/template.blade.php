<!DOCTIPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
      BetConsult - {{ $title ?? "BetConsult"}}
    </title>

    <!-- Icon -->
    <link rel="shortcut icon" href="/images/icon.png" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"></link>
    <link rel="stylesheet" href="{{ asset('css/main-style.css?' . time())}}"></link>
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/mainstyle.js"></script>
  </head>
  <body> 
    @section('header')
    <header class="hr">
   
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <!-- <a class="navbar-brand" href="#">BetConsult</a> -->
        <div class="container">     
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ $path ?? ''  =='/' ? 'active' : '' }}">
              <a id="main" class="nav-link" href="{{ url('/') }}">Главная<!-- <span class="sr-only">(current)</span> --></a>
            </li>

            <li class="nav-item {{ $path ?? ''  =='/' ? 'show-live' : '' }}">
              <a id="live" class="nav-link" href="/show-live">Live</a>
            </li>

            <li class="nav-item {{ $path ?? ''  =='/' ? 'show-tv' : '' }}">
              <a id="tv" class="nav-link" href="/show-tv">TV</a>
            </li>

            <!--<li class="nav-item {{ $path ?? ''  =='/' ? 'statistics' : '' }}">
              <a id="statistics" class="nav-link" href="/statistics">Статистика</a>
            </li>

            <li class="nav-item {{ $path ?? ''  =='/' ? 'calculator' : '' }}">
              <a id="calculator" class="nav-link" href="/calculator">Калькулятор</a>
            </li> -->

            <li class="nav-item {{ $path ?? ''  =='/' ? 'contacts' : '' }}">
              <a id="contacts" class="nav-link" href="/contacts">Контакты</a>
            </li>

            <li class="nav-item {{ $path ?? ''  =='/' ? 'about' : '' }}">
              <a id="about" class="nav-link" href="/about">О нас</a>
            </li>

          </ul>
          
          
          <ul class="navbar-nav ml-auto">
            @if(!isset($user)) 
              <li class="nav-item">
                <a id="register" class="nav-link" href="/register">Регистрация</a>
              </li>
              <li class="nav-item">
                <a id="login" class="nav-link" href="/login">Вход</a>
              </li>
            @else
              <li class="nav-item">
                <a id="home" class="nav-link" href="/home">{{ $user->login ?? "" }}</a>
              </li>
            @endif
          </ul>

          <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark btn-lg" type="submit">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </form> -->
        </div>
        </div>
      </nav>
      <div class="container-fluid head-logo">
        <div class="row align-items-center">
          <div class="col-3">
            <a href="{{ asset('/') }}"><img class="main-logo" src="{{ asset('images/logo.png') }}"></a>
          </div>
          <div class="col-1">
          </div>
          <div class="col-7">
            <a href="{{ asset('/') }}"><img class="main-banner" src="{{ asset('images/banner.jpg') }}"></a>
          </div>
          <div class="col-1">
          </div>
        </div>
      </div>
    </header>
    @show

    <main>
      @section('main')
      @show
    </main>

    @section('footer')
    <footer class="footer bg-dark">
      <div class="container-fluid pagging-10 hr">
        <div class="container" >
          <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <p>
                <a href="{{ asset('/') }}"><img class="img-fluid" src="{{ asset('images/logo.png') }}"></a> 
              </p>
              <p class="text-light text-center">
                Мы в соцсетях
              </p>    
              <div >   
                <div class="container-fluid">
                  <div class="col"></div>
                  <div class="social instagram col">
                      <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                  </div>
                  <div class="social facebook col">
                     <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>    
                  </div> 
                  <div class="social vk col">
                    <a href="https://vk.com" target="_blank"><i class="fa fa-vk fa-2x"></i></a>    
                  </div>
                  <div class="social odnoklassniki col">
                    <a href="https://ok.ru" target="_blank"><i class="fa fa-odnoklassniki fa-2x"></i></a>   
                  </div>
                  <div class="social telegram col">
                      <a href="https://web.telegram.org" target="_blank"><i class="fa fa-paper-plane fa-2x"></i></a>
                  </div>
                  <div class="social whatsapp col">
                      <a href="https://web.whatsapp.com" target="_blank"><i class="fa fa-whatsapp fa-2x"></i></a>
                  </div>
                  <div class="col"></div>
                </div>      
  
              </div>     
            </div> 
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <p class="text-light text-center font-weight-bold">
                <big>Новости</big>
              </p>
              <ul>
                <li><a class="text-light" href="/category/1">Новости Футбола</a></li>
                <li><a class="text-light" href="/category/2">Новости Баскетбола</a></li>
                <li><a class="text-light" href="/category/3">Новости Тенниса</a></li>
                <li><a class="text-light" href="/category/4">Новости Хоккея</a></li>
                <li><a class="text-light" href="/category/5">Другие новости</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <p class="text-light text-center font-weight-bold">
                <big>Онлайн</big>
              </p>
              <ul>
                <li><a class="text-light" href="/show-live">Live-трансляции</a></li>
                <li><a class="text-light" href="/show-tv">Просмотр TV</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <p class="text-light text-center font-weight-bold">
                <big>О нас</big>
              </p>
              <ul>
                <li><a class="text-light" href="/about">Информация "О НАС"</a></li>
                <li><a class="text-light" href="/contacts">Наши контакты</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid pagging-10" >
        <p style="margin-bottom: 0px;" class="text-light text-center">
          Copyright © {{ date('Y') }} BetConsult <br />
          Developed by 
          <a href="https://freelance.ru/maxfltop" class="text-light">
            MaxFLTop
          </a>
        </p>
      </div>
    </footer>
    @show
  </body>
</html>