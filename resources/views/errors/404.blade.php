@extends('templates.template')

@section('main')
    <div class="container">
        <div class="error-page">
            <h1 class="display-3">Упс... Что-то пошло не так...</h1>
            <h2 class="display-4">"Ошибка 404: Страница "{{ url()->current() }}" не найдена"</h2>
            <br />
            <p class="">Попытайтесь позже...</p>        
        </div>
    </div>
@endsection