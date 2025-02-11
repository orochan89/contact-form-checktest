@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header-nav')
    <div class="header-nav__inner">
        <a class="header-nav__register" href="/login">
            login
        </a>
    </div>
@endsection

@section('content')
    <div class="register-content">
        <h2 class="register-content--title">
            Register
        </h2>
        <div class="register-content__inner">
            <form action="register-content-form">
                @csrf
                <div class="register-content-form___name">
                    <h3 class="register-content-form--title">
                        お名前
                    </h3>
                    <input class="register-content-form__name-input" type="text" name="name"
                        value="{{ old('name') }}">
                </div>
                <div class="register-content-form__email">
                    <h3 class="register-content-form--title">
                        メールアドレス
                    </h3>
                    <input class="register-content-form__email-input" type="email" name="email"
                        value="{{ old('email') }}">
                </div>
                <div class="register-content-form__password">
                    <h3 class="register-content-form--title">
                        パスワード
                    </h3>
                    <input class="register-content-form__password-input" type="text" name="password"
                        value="{{ old('password') }}">
                </div>
                <div class="register-content-form__button">
                    <button class="register-content-form__button-submit">
                        登録
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
