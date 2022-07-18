@extends('layouts.app')

@section('title')
    {{ $LoggedUserInfo->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row flex-column align-items-center">
            <h1>Это ваш профиль </h1>
            <p>Здесь вы можете внести изменения в свой аккаунт</p>
            <div class="alert alert-info">
                <p>{{ $LoggedUserInfo->name }}</p>
                <p>{{ $LoggedUserInfo->surname  }}</p>
                <p>{{ $LoggedUserInfo->email  }}</p>
                <p><small>{{ $LoggedUserInfo->created_at  }}</small></p>
                <a href="#"><button class="btn btn-warning">Редактировать мои данные</button></a>
            </div>
        </div>
    </div>
@endsection
