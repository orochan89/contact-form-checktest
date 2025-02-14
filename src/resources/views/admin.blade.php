@extends('layouts/app')

@livewireStyles

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
        <form class="search-form" action="/admin/search" method="get">
            <div class="admin__content-search">
                @csrf
                <input class="search-form__keyword" type="text" name="keyword" value="{{ old('keyword') }}">
                <select class="search-form__gender" name="gender">
                    <option value="">性別</option>
                    <option value="1" {{ request('gender') == '1' }}>男性</option>
                    <option value="2" {{ request('gender') == '2' }}>女性</option>
                    <option value="3" {{ request('gender') == '3' }}>その他</option>
                </select>
                <select class="search-form__category" name="category_id">
                    <option value="">お問い合わせの種類</option>
                    @foreach ($categories as $category)
                        <option class="search-form__category-option" value="{{ $category->id }}">
                            {{ $category->content }}</option>
                    @endforeach
                </select>
                <input class="search-form__date" type="date" name="created_at" value="{{ old('created_at') }}">
                <button class="search-form__search-submit" value="search" type="submit">
                    検索
                </button>
                <button class="search-form__search-reset" value="reset">
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

            <div class="pagination">
                {{ $contacts->links() }}
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
        @foreach ($contacts as $contact)
            <tr class="search-result-table__row">
                <td class="search-result-table__td">
                    <p class="search-result-table__hit">{{ $contact['last_name'] }} {{ $contact['first_name'] }}</p>
                </td>
                <td class="search-result-table__td">
                    <p class="search-result-table__hit">
                        @if ($contact['gender'] == 1)
                            男性
                        @elseif($contact['gender'] == 2)
                            女性
                        @elseif($contact['gender'] == 3)
                            その他
                        @endif
                    </p>
                </td>
                <td class="search-result-table__td">
                    <p class="search-result-table__hit">{{ $contact['email'] }}</p>
                </td>
                <td class="search-result-table__td">
                    <p class="search-result-table__hit">{{ $contact->category->content }}</p>
                </td>
                <td class="search-result-table__td">
                    <button wire:click="openModal()">詳細</button>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
    <div>
        @if ($showModal)
            <div>
                <button wire:click="closeModal" class="">
                </button>
            </div>
            <table>
                <tr class="Modal__table__row">
                    <th class="Modal__table__th">
                        お名前
                    </th>
                    <td class="Modal__table__td">
                        {{ $contact['last_name'] }} {{ $contact['first_name'] }}
                    </td>
                </tr>
                <tr class="Modal__table__row">
                    <th class="Modal__table__th">
                        性別
                    </th>
                    <td class="Modal__table__td">
                        {{ $contact['gender'] }}
                    </td>
                </tr>
                <tr class="Modal__table__row">
                    <th class="Modal__table__th">
                        メールアドレス
                    </th>
                    <td class="Modal__table__td">
                        {{ $contact['email'] }}
                    </td>
                </tr>
                <tr class="Modal__table__row">
                    <th class="Modal__table__th">
                        電話番号
                    </th>
                    <td class="Modal__table__td">
                        {{ $contact['tell'] }}
                    </td>
                </tr>
                <tr class="Modal__table__row">
                    <th class="Modal__table__th">
                        住所
                    </th>
                    <td class="Modal__table__td">
                        {{ $contact['address'] }}
                    </td>
                </tr>
                <tr class="Modal__table__row">
                    <th class="Modal__table__th">
                        建物名
                    </th>
                    <td class="Modal__table__td">
                        {{ $contact['building'] }}
                    </td>
                </tr>
                <tr class="Modal__table__row">
                    <th class="Modal__table__th">
                        お問い合わせの種類
                    </th>
                    <td class="Modal__table__td">
                        {{ $contact->category->content }}
                    </td>
                </tr>
                <tr class="Modal__table__row">
                    <th class="Modal__table__th">
                        お問い合わせの内容
                    </th>
                    <td class="Modal__table__td">
                        {{ $contact['detail'] }}
                    </td>
                </tr>
            </table>
            <div class="">
                <button wire:click="delete({{ $contact_id }})" class="">
                    削除
                </button>
            </div>
        @endif
    </div>
@endsection
