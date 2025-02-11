@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('header-nav')
    <div class="header-nav__inner">
        <a class="header-nav__logout" href="/">
            logout
        </a>
    </div>
@endsection

@section('content')
    <div class="admin__content">
        <h2 class="admin__content--title">
            Admin
        </h2>
    </div>
    <div class="admin__content__inner">
        <div class="admin__content-search">
            <form class="search-form" action="" method="get">
                @csrf
                <input class="search-form__keyword" type="text">
                <select class="search-form__gender" name="gender">
                    {{-- @foreach ($users as $gender)
                <option class="search-form__gender-option" value=""></option>
            @endforeach --}}
                </select>
                <select class="search-form__category" name="category">
                    {{-- @foreach ($categories as $category)
                <option class="search-form__category-option" value=""></option>
            @endforeach --}}
                </select>
                <input class="search-form__date" type="date" name="date">
                <button class="search-form__search-submit">
                    検索
                </button>
                <button class="search-form__search-reset">
                    リセット
                </button>
            </form>
        </div>
        <div class="export-and-pages">
            <form class="csv-export" action="" method="post">
                <button class="csv-export__button">
                    エクスポート
                </button>
                <div class="pages"> </div>
            </form>
            <div class="pagenation">
                {{$content->links()}}
            </div>
        </div>
        <table class="search-result-table">
            <tr class="search-result-table__row">
                <th class="search-result-table__th">
                    <p class="search-result-table-name">お名前</p>
                </th>
                <th class="search-result-table__th">
                    <p class="search-result-table-name">性別</p>
                </th>
                <th class="search-result-table__th">
                    <p class="search-result-table-name">メールアドレス</p>
                </th>
                <th class="search-result-table__th">
                    <p class="search-result-table-name">お問い合わせの種類</p>
                </th>
            </tr>
            {{-- @foreach ($collection as $item)
                <tr class="search-result-table__row">
                    <td class="search-result-table__td">
                        <p class="search-result-table__hit"></p>
                    </td>
                    <td class="search-result-table__td">
                        <p class="search-result-table__hit"></p>
                    </td>
                    <td class="search-result-table__td">
                        <p class="search-result-table__hit"></p>
                    </td>
                    <td class="search-result-table__td">
                        <p class="search-result-table__hit"></p>
                    </td>
                    <td class="search-result-table__td">
                        <button class="search-result-detail">詳細</button>
                    </td>
                </tr>
            @endforeach --}}
        </table>
    </div>
@endsection
