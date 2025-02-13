@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('header-nav__button')
@endsection

@section('content')
    <div class="contact__content">
        <h2 class="contact__content--title">Contact</h2>
        <form class="contact-form" action="/post" method="post">
            @csrf
            <table class="contact-form--table">
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__th">
                        <p class="contact-form--table__title">
                            お名前
                        </p>
                    </th>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="text" name="last_name"
                            value="{{ old('last_name') }}" placeholder="例:山田">
                        @error('last_name')
                            <p style="color: red">
                                {{ $errors->first('last_name') }}
                            </p>
                        @enderror
                    </td>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="text" name="first_name"
                            value="{{ old('first_name') }}" placeholder="例:太郎">
                        @error('first_name')
                            <p style="color: red">
                                {{ $errors->first('first_name') }}
                            </p>
                        @enderror
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
                            <input class="contact-form--table-input-radio" type="radio" name="gender" value="1"
                                id="1" checked>男性
                        </label>
                    </td>
                    <td class="contact-form--table__td">
                        <label class="contact-form--table-input-radio__label" for="woman">
                            <input class="contact-form--table-input-radio" type="radio" name="gender" value="2"
                                id="2">女性
                        </label>
                    </td>
                    <td class="contact-form--table__td">
                        <label class="contact-form--table-input-radio__label" for="other">
                            <input class="contact-form--table-input-radio" type="radio" name="gender" value="3"
                                id="3">その他
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
                        <input class="contact-form__table-input" type="email" name="email" value="{{ old('email') }}"
                            placeholder="例:test@example.com">
                        @error('email')
                            <p style="color: red">
                                {{ $errors->first('email') }}
                            </p>
                        @enderror
                    </td>
                </tr>
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__td">
                        <p class="contact-form--table__title">
                            電話番号
                        </p>
                    </th>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="tel1" name="tel1" value="{{ old('tel1') }}"
                            placeholder="080"> -
                        @error('tel1')
                            <p style="color: red">
                                {{ $errors->first('tel1') }}
                            </p>
                        @enderror
                    </td>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="tel2" name="tel2" value="{{ old('tel2') }}"
                            placeholder="1234"> -
                        @error('tel2')
                            <p style="color: red">
                                {{ $errors->first('tel2') }}
                            </p>
                        @enderror
                    </td>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="tel3" name="tel3" value="{{ old('tel3') }}"
                            placeholder="5678">
                        @error('tel3')
                            <p style="color: red">
                                {{ $errors->first('tel3') }}
                            </p>
                        @enderror
                    </td>
                </tr>
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__th">
                        <p class="contact-form--table__title">
                            住所
                        </p>
                    </th>
                    <td class="contact-form--table__td">
                        <input class="contact-form__table-input" type="text" name="address" value="{{ old('address') }}"
                            placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                        @error('address')
                            <p style="color: red">
                                {{ $errors->first('address') }}
                            </p>
                        @enderror
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
                            value="{{ old('building') }}" placeholder="例:千駄ヶ谷マンション101">
                    </td>
                </tr>
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__th">
                        <p class="contact-form--table__title">
                            お問い合わせの種類
                        </p>
                    </th>
                    <td class="contact-form--table__td">
                        <select class="contact-form__table-input" name="category_id">
                            <option value="" selected>選択してください</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->content }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p style="color: red">
                                {{ $errors->first('category_id') }}
                            </p>
                        @enderror
                    </td>
                </tr>
                <tr class="contact-form--table__row">
                    <th class="contact-form--table__th--content">
                        <p class="contact-form--table__title">
                            お問い合わせ内容
                        </p>
                    </th>
                    <td class="contact-form--table__td--content">
                        <input class="contact-form__table-input--detail" type="text" name="detail"
                            value="{{ old('detail') }}" placeholder="お問い合わせ内容をご記載ください">
                        @error('detail')
                            <p style="color: red">
                                {{ $errors->first('detail') }}
                            </p>
                        @enderror
                    </td>
                </tr>
            </table>
            <div class="contact-form__button">
                <button class="contact-form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
@endsection
