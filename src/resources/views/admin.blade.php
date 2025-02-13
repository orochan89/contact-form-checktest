@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('header-nav')
    <form class="header-form" action="{{ route('logout') }}" method="post">
        @csrf
        <div class="header-nav__inner">
            <button class="header-nav__logout" type="submit">
                logout
            </button>
        </div>
    </form>
@endsection

@section('content')
    <div class="admin__content">
        <h2 class="admin__content--title">
            Admin
        </h2>
    </div>
    <div class="admin__content__inner">
        <form class="search-form" action="" method="get">
            <div class="admin__content-search">
                @csrf
                <input class="search-form__keyword" type="text">
                <select class="search-form__gender" name="gender">
                    {{-- @foreach ($genders as $gender)
                        <option class="search-form__gender-option" value="{{ $item['gender'] }}">{{ $gender_string }}
                        </option>
                    @endforeach --}}
                </select>
                <select class="search-form__category" name="category">
                    {{-- @foreach ($categories as $category)
                        <option class="search-form__category-option" value="{{ $item['category_id'] }}">
                            {{ $category->content }}</option>
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
    <form class="csv-export" action="" method="post">
        <div class="export-and-pages">

            <button class="csv-export__button">
                エクスポート
            </button>
            <div class="pages"> </div>

            <div class="pagenation">
                {{ $items->links() }}
            </div>
        </div>
    </form>
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
        @foreach ($items as $item)
            <tr class="search-result-table__row">
                <td class="search-result-table__td">
                    <p class="search-result-table__hit">{{ $item['last_name'] }} {{ $item['first_name'] }}</p>
                </td>
                <td class="search-result-table__td">
                    <p class="search-result-table__hit">
                        @if ($item['gender'] == 1)
                            男性
                        @elseif($item['gender'] == 2)
                            女性
                        @elseif($item['gender'] == 3)
                            その他
                        @endif
                    </p>
                </td>
                <td class="search-result-table__td">
                    <p class="search-result-table__hit">{{ $item['email'] }}</p>
                </td>
                <td class="search-result-table__td">
                    <p class="search-result-table__hit">{{ $item->category->content }}</p>
                </td>
                <td class="search-result-table__td">
                    <button class="search-result-detail">詳細</button>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection
