@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('header-nav')
@endsection

@section('content')
    <div class="confirm-content">
        <h2 class="confirm-content--title">
            Confirm
        </h2>
        <form class="confirm-form" action="/thanks" method="post">
            @csrf
            <table class="confirm-table">
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p>
                            お名前
                        </p>
                    </th>
                    <td class="confirm-table__td">
                        <input type="hidden" name="last_name" value="{{ $input['last_name'] }}" readonly>
                        <input type="hidden" name="first_name" value="{{ $input['first_name'] }}">
                        <p>{{ $input['last_name'] }} {{ $input['first_name'] }}</p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            性別
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <input type="hidden" name="gender" value="{{ $input['gender'] }}" readonly>
                        @if ($input['gender'] == '1')
                            <p>男性</p>
                        @elseif($input['gender'] == '2')
                            <p>女性</p>
                        @elseif($input['gender'] == '3')
                            <p>その他</p>
                        @endif
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            メールアドレス
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <input type="hidden" name="email" value="{{ $input['email'] }}" readonly>
                        <p>{{ $input['email'] }}</p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            電話番号
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <input type="hidden" name="tell" value="{{ $tell }}" readonly>
                        <p>{{ $tell }}</p>

                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            住所
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <input type="hidden" name="address" value="{{ $input['address'] }}" readonly>
                        <p>{{ $input['address'] }}</p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            建物名
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <input type="hidden" name="building" value="{{ $input['building'] }}" readonly>
                        <p>{{ $input['building'] }}</p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            お問い合わせの種類
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <input type="hidden" name="category_id" value="{{ $input['category_id'] }}" readonly>
                        <p>{{ $category_content }}</p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            お問い合わせ内容
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <input type="hidden" name="detail" value="{{ $input['detail'] }}" readonly>
                        <p>{{ $input['detail'] }}</p>
                    </td>
                </tr>
            </table>
            <div class="confirm-form__button">
                <button name="action" class="confirm-form__button-submit" type="submit" value="complete">
                    送信
                </button>
                <button name="action" class="confirm-form__button-fix" value="back">
                    修正
                </button>

            </div>

        </form>
    </div>
@endsection
