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
        <form class="confirm-form" action="" method="post">
            <table class="confirm-table">
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            お名前
                        <p>
                    </th>
                    <td class="confirm-table__td">

                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            性別
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <p class="confirm-table--item">
                            aaa
                        </p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            メールアドレス
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <p class="confirm-table--item">
                            aaa
                        </p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            電話番号
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <p class="confirm-table--item">
                            aaa
                        </p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            住所
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <p class="confirm-table--item">
                            aaa
                        </p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            建物名
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <p class="confirm-table--item">
                            aaa
                        </p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            お問い合わせの種類
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <p class="confirm-table--item">
                            aaa
                        </p>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table___th">
                        <p class="confirm-table--title">
                            お問い合わせ内容
                        <p>
                    </th>
                    <td class="confirm-table__td">
                        <p class="confirm-table--item">
                            aaa
                        </p>
                    </td>
                </tr>
            </table>
            <div class="confirm-form__button">
                <button class="confirm-form__button-submit">
                    送信
                </button>
                <button class="confirm-form__button-fix">
                    修正
                </button>

            </div>

        </form>
    </div>
@endsection
