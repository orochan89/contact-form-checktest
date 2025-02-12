@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header-nav')
    <form method="get" action="/resister">
        @csrf
        <div class="header-nav__inner">
            <button class="header-nav__register" type="submit">
                register
            </button>
        </div>
    </form>
@endsection

@section('content')
    <div class="login-content">
        <h2 class="login-content--title">
            login
        </h2>
        <div class="login-content__inner">
            <form class="form" action="/login" method="post">
                @csrf
                <div class="login-content-form__email">
                    <h3 class="login-content-form--title">
                        メールアドレス
                    </h3>
                    <input class="login-content-form__email-input" type="email" name="email"
                        value="{{ old('email') }}">
                    @error('email')
                        <p style="color: red">
                            {{ $errors->first('email') }}
                        </p>
                    @enderror
                </div>
                <div class="login-content-form__password">
                    <h3 class="login-content-form--title">
                        パスワード
                    </h3>
                    <input class="login-content-form__password-input" type="password" name="password"
                        value="{{ old('password') }}">
                    @error('password')
                        <p style="color: red">
                            {{ $errors->first('password') }}
                        </p>
                    @enderror
                </div>
                <div class="login-content-form__button">
                    <button class="login-content-form__button-submit" type="submit">
                        ログイン
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
