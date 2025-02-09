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
            Login
        </h2>
        <div class="login-content__inner">
            <form action="login-content-form">
                @csrf
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
                    <input class="login-content-form__password-input" type="text" name="password"
                        value="例:coachtech1106">
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
