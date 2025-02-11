@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header-nav')
    <div class="header-nav__inner">
        <a class="header-nav__register" href="/register">
            register
        </a>
    </div>
@endsection

@section('content')
    <div class="login-content">
        <h2 class="login-content--title">
            login
        </h2>
        <div class="login-content__inner">
            <form class="login-content-form" action="/login" method="post">
                @csrf
                <div class="login-content-form___name">
                    <h3 class="login-content-form--title">
                        お名前
                    </h3>
                    <input class="login-content-form__name-input" type="text" name="name" value="{{ old('name') }}">
                    @error('name')
                        <p style="color: red">
                            {{ $errors->first('name') }}
                        </p>
                    @enderror
                </div>
                <div class="login-content-form__email">
                    <h3 class="login-content-form--title">
                        メールアドレス
                    </h3>
                    <input class="login-content-form__email-input" type="email" name="email"
                        value="{{ old('email') }}">
                </div>
                <div class="login-content-form__password">
                    <h3 class="login-content-form--title">
                        パスワード
                    </h3>
                    <input class="login-content-form__password-input" type="password" name="password"
                        value="{{ old('password') }}">
                </div>
                <div class="login-content-form__button">
                    <button class="login-content-form__button-submit">
                        ログイン
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
