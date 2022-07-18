@extends('layouts.app')

@section('title')
    {{ $registr->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row flex-column align-items-center">
            <h1>Это профиль {{ $registr->name }}</h1>
            <p>Здесь вы можете узнать данные про этого человека</p>
                <div class="alert alert-info">
                    <p>{{ $registr->surname  }}</p>
                    <p>{{ $registr->email  }}</p>
                    <p><small>{{ $registr->created_at  }}</small></p>
                    <a href="#"><button class="btn btn-warning">Отправить сообщение</button></a>
                </div>
        </div>
    </div>
@endsection
