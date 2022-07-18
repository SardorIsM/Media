@extends('layouts.app')

@section('title')
    {{ $registr->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row flex-column align-items-center">
            <h1>Это ваш профиль </h1>
            <p>Здесь вы можете внести изменения в свой аккаунт</p>
            <div class="alert alert-info">
                <p>{{ $registr->name }}</p>
                <p>{{ $registr->surname  }}</p>
                <p>{{ $registr->email  }}</p>
                <p><small>{{ $registr->created_at  }}</small></p>
                <a href="{{ route('my-page-update', $registr->id)  }}"><button class="btn btn-warning">Редактировать мои данные</button></a>
            </div>
        </div>
    </div>
@endsection
