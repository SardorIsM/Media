@extends('layouts.app')

@section('title')
    Welcom Facebook
@endsection

@section('content')
    <div class="container">
        <div class="row flex-column align-items-center">
            <h1>Добро пожаловать Media</h1>
            <a href="{{ route('registr')  }}">Регистрация</a>
        </div>
    </div>
@endsection
