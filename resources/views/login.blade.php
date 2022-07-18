@extends('layouts.app')

@section('title')
    Вход на Media
@endsection

@section('content')
    <div class="container">
        <div class="row flex-column align-items-center">
            <h1>Вход на Media</h1>

            <form action="{{ route('check-page')  }}" method="post">
                @csrf
                <div class="results">
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" name="email" placeholder="эл.адресс" id="email" class="form-control" value="{{ old('email') }}">

                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Новый пароль" id="pass" class="form-control" value="{{ old('password') }}">

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Войти</button>
                </div>
            </form>
        </div>
    </div>
@endsection
