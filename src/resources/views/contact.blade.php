@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
@endsection
@section('content')
    <div class="contact">
        <div class="contact__title">
            <p class="contact__title-p">Contact</p>
        </div>
        <div class="contact__content">
            <div class="contact__content-table">
                <table class="contact__content-table--list">
                    <tr class="content-table__item">
                        <th class="table__item">お名前</th>
                        <td>
                            <div class="table-input__name">
                                <input type="text" class="table-input__name1" placeholder="例:山田">
                                <input type="text" class="table-input__name2" placeholder="例:太郎">
                            </div>
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">性別</th>
                        <td>
                                <input type="checkbox" id="men" class="table-input__sex1">
                                <label for="men">男性</label>
                                <input type="checkbox" id="women" class="table-input__sex2">
                                <label for="women">女性</label>
                                <input type="checkbox" id="others" class="table-input__sex3">
                                <label for="others">その他</label>
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">メールアドレス</th>
                        <td>
                            <input type="email" class="table-input__email" placeholder="例:test@example.com">
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">電話番号</th>
                        <td>
                            <div class="table-input__tel--space">
                                <input type="text" class="table-input__tel" placeholder="080">
                                <span class="tel-">-</span>
                                <input type="text" class="table-input__tel" placeholder="1234">
                                <span class="tel-">-</span>
                                <input type="text" class="table-input__tel" placeholder="5678">
                            </div>
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">住所</th>
                        <td>
                            <input type="text" class="table-input__address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th >建物名</th>
                        <td>
                            <input type="text" class="table-input__building" placeholder="例:千駄ヶ谷マンション101">
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">お問い合わせの種類</th>
                        <td>
                            <select name="" id="" class="table-select__contacts">
                                <option value="">選択してください</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="content-table__item">
                        <th class="table__item">お問い合わせ内容</span></th>
                        <td>
                            <textarea name="" id="" class="table__contact-textarea" placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </td>
                    </tr>
                </table>
                <div class="contact-button">
                    <button class="contact-button__submit">確認画面</button>
                </div>
            </div>
        </div>
    </div>
@endsection