@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('header-nav__button')
@endsection

@section('content')
    <div class="contact__content">
        <h2 class="contact__content--title">Contact</h2>
        <form class="contact-form" action="/" method="post">
            @csrf
            <table class="contact-form--table">
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__th">
                        <p class="contact-form--table__title">
                            お名前
                        </p>
                    </th>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="text" name="last-name" value="例:山田">
                    </td>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="text" name="first-name" value="例:太郎">
                    </td>
                </tr>
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__th">
                        <p class="contact-form--table__title">
                            性別
                        </p>
                    </th>
                    <td class="contact-form--table__td">
                        <label class="contact-form--table-input-radio__label" for="man">
                            <input class="contact-form--table-input-radio" type="radio" name="gender" value="man"
                                id="man" checked>男性
                        </label>
                    </td>
                    <td class="contact-form--table__td">
                        <label class="contact-form--table-input-radio__label" for="woman">
                            <input class="contact-form--table-input-radio" type="radio" name="gender" value="woman"
                                id="woman">女性
                        </label>
                    </td>
                    <td class="contact-form--table__td">
                        <label class="contact-form--table-input-radio__label" for="other">
                            <input class="contact-form--table-input-radio" type="radio" name="gender" value="other"
                                id="other">その他
                        </label>
                    </td>
                </tr>
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__th">
                        <p class="contact-form--table__title">
                            メールアドレス
                        </p>
                    </th>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="email" name="email" value="{{ old('email') }}">
                    </td>
                </tr>
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__td">
                        <p class="contact-form--table__title">
                            電話番号
                        </p>
                    </th>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="tel" name="tel-top"> -
                    </td>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="tel" name="tel-middle"> -
                    </td>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="tel" name="tel-bottom">
                    </td>
                </tr>
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__th">
                        <p class="contact-form--table__title">
                            住所
                        </p>
                    </th>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="text" name="address">
                    </td>
                </tr>
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__th">
                        <p class="contact-form--table__title--building">
                            建物名
                        </p>
                    </th>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="text" name="building"
                            value="{{ old('building') }}">
                    </td>
                </tr>
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__th">
                        <p class="contact-form--table__title">
                            お問い合わせの種類
                        </p>
                    </th>
                    <td class="contact-form--table__td">
                        <select class="contact-form__table-input" name="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->category_id }}">{{ $category->content }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__th--content">
                        <p class="contact-form--table__title">
                            お問い合わせ内容
                        </p>
                    </th>
                    <td class="contact-form--table__td--content">
                        <input class="contact-form__table-input--detail" type="text" name="content"
                            value="{{ old('content') }}">
                    </td>
                </tr>
            </table>
            <div class="contact-form__button">
                <button class="contact-form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
@endsection
