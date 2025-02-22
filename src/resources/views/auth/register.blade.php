@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header-nav')
    <form method="get" action="/login">
        @csrf
        <div class="header-nav__inner">
            <button class="header-nav__login" type="submit">
                login
            </button>
        </div>
    </form>
@endsection

@section('content')
    <div class="register-content">
        <h2 class="register-content--title">
            Register
        </h2>
        <div class="register-content__inner">
            <form class="register-content-form" action="/register" method="post">
                @csrf
                <div class="register-content-form___name">
                    <h3 class="register-content-form--title">
                        お名前
                    </h3>
                    <input class="register-content-form__name-input" type="text" name="name"
                        value="{{ old('name') }}">
                    @error('name')
                        <p style="color: red">
                            {{ $errors->first('name') }}
                        </p>
                    @enderror
                </div>
                <div class="register-content-form__email">
                    <h3 class="register-content-form--title">
                        メールアドレス
                    </h3>
                    <input class="register-content-form__email-input" type="email" name="email"
                        value="{{ old('email') }}">
                    @error('email')
                        <p style="color: red">
                            {{ $errors->first('email') }}
                        </p>
                    @enderror
                </div>
                <div class="register-content-form__password">
                    <h3 class="register-content-form--title">
                        パスワード
                    </h3>
                    <input class="register-content-form__password-input" type="password" name="password"
                        value="{{ old('password') }}">
                    @error('password')
                        <p style="color: red">
                            {{ $errors->first('password') }}
                        </p>
                    @enderror
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
