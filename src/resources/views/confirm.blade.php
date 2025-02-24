@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection
@section('content')
<form action="/thanks" method="post">
    @csrf
    <div class="confirm">
        <div class="confirm__title">
            <p class="confirm__title-p">Confirm</p>
        </div>
        <div class="confirm__content">
            <div class="confirm__content-table">
                <table class="confirm__content-table--list">
                    <tr class="content-table__item">
                        <th class="table__item">お名前</th>
                        <td>
                            <p class="confirm-table__name">{{ $contact['last_name'] }}&emsp;{{ $contact['first_name'] }}</p>
                            <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                            <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">性別</th>
                        <td>
                            <p class="table__item-sex"><?php if ($contact['gender'] == 1) { echo "男性";
                                } elseif ($contact['gender'] == 2) {
                                    echo "女性";
                                } else {
                                    echo "その他";
                                } ?></p>
                            <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">メールアドレス</th>
                        <td>
                            <p class="table__item-email">{{ $contact['email'] }}</p>
                            <input type="hidden" name="email" value="{{ $contact['email'] }}">
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">電話番号</th>
                        <td>
                            <p class="table__item-tel">{{ $contact['tel'] }}</p>
                            <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">住所</th>
                        <td>
                            <p class="table__item-address">{{ $contact['address'] }}</p>
                            <input type="hidden" name="address" value="{{ $contact['address'] }}">
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th>建物名</th>
                        <td>
                            <p class="table__item-building">{{ $contact['building'] }}</p>
                            <input type="hidden" name="building" value="{{ $contact['building'] }}">
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">お問い合わせの種類</th>
                        <td>
                            <p class="table__select-confirm">{{ $category->content }}</p>
                            <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">お問い合わせ内容</span></th>
                        <td>
                            <p class="table__item-confirm">{{ $contact['detail'] }}</p>
                            <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                        </td>
                    </tr>
                </table>
                <div class="confirm-button">
                    <button type="submit" class="confirm-button__request">送信</button>
                    <a href="/" class="confirm-button__fix">修正</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection