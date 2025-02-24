@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection
@section('content')
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
                            <p class="confirm-table__name">山田  太郎</p>
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">性別</th>
                        <td>
                            <p class="table__item-sex">男性</p>
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">メールアドレス</th>
                        <td>
                            <p class="table__item-email">test@example.com</p>
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">電話番号</th>
                        <td>
                            <p class="table__item-tel">08012345678</p>
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">住所</th>
                        <td>
                            <p class="table__item-address">東京都渋谷区千駄ヶ谷1-2-3</p>
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th>建物名</th>
                        <td>
                            <p class="table__item-building">千駄ヶ谷マンション101</p>
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">お問い合わせの種類</th>
                        <td>
                            <p class="table__select-confirm">商品の交換について</p>
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">お問い合わせ内容</span></th>
                        <td>
                            <p class="table__item-confirm">届いた商品が注文した商品ではありませんでした。<br>商品の取り替えをお願いします。</p>
                        </td>
                    </tr>
                </table>
                <div class="confirm-button">
                    <button class="confirm-button__request">送信</button>
                    <a href="/" class="confirm-button__fix">修正</a>
                </div>
            </div>
        </div>
    </div>
@endsection