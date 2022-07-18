@extends('layouts.app')

@section('title')
Society
@endsection

@section('content')
    <div class="container">
        <div class="row flex-column align-items-center">
            <h1>Это общество Media</h1>
            <p>Здесь вы можете подружиться с разными людьми</p>
            @foreach($registrs as $registr)
                <div class="alert alert-info">
                    <h3>{{ $registr->name  }}</h3>
                    <p>{{ $registr->surname  }}</p>
                    <p>{{ $registr->email  }}</p>
                    <p><small>{{ $registr->created_at  }}</small></p>
                    <a href="{{ route('registr-persona', $registr->id)  }}"><button class="btn btn-warning">Посмотреть аккаунт</button></a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
