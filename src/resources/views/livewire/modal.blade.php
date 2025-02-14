<div>
    @if ($isModalOpen)
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
                    {{ $last_name }} {{ $first_name }}
                </td>
            </tr>
            <tr class="Modal__table__row">
                <th class="Modal__table__th">
                    性別
                </th>
                <td class="Modal__table__td">
                    {{ $gender }}
                </td>
            </tr>
            <tr class="Modal__table__row">
                <th class="Modal__table__th">
                    メールアドレス
                </th>
                <td class="Modal__table__td">
                    {{ $email }}
                </td>
            </tr>
            <tr class="Modal__table__row">
                <th class="Modal__table__th">
                    電話番号
                </th>
                <td class="Modal__table__td">
                    {{ $tell }}
                </td>
            </tr>
            <tr class="Modal__table__row">
                <th class="Modal__table__th">
                    住所
                </th>
                <td class="Modal__table__td">
                    {{ $address }}
                </td>
            </tr>
            <tr class="Modal__table__row">
                <th class="Modal__table__th">
                    建物名
                </th>
                <td class="Modal__table__td">
                    {{ $building }}
                </td>
            </tr>
            <tr class="Modal__table__row">
                <th class="Modal__table__th">
                    お問い合わせの種類
                </th>
                <td class="Modal__table__td">
                    {{ $category_id }}
                </td>
            </tr>
            <tr class="Modal__table__row">
                <th class="Modal__table__th">
                    お問い合わせの内容
                </th>
                <td class="Modal__table__td">
                    {{ $detail }}
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
