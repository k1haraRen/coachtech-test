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
                <form class="create-form" action="/confirm" method="post">
                    @csrf
                    <table class="contact__content-table--list">
                        <tr class="content-table__item">
                            <th class="table__item">お名前</th>
                            <td>
                                <div class="table-input__name">
                                    <input class="table-input__name1" placeholder="例:山田" type="text" name="last_name" value="{{ old('last_name', $contact['last_name'] ?? '') }}">
                                    <input class="table-input__name2" placeholder="例:太郎" type="text" name="first_name" value="{{ old('first_name', $contact['first_name'] ?? '') }}">
                                </div>
                            </td>
                        </tr>
                        <tr class="content-table__item">
                            <th class="table__item">性別</th>
                            <td>
                                <input class="table-input__sex1" type="radio" id="men" name="gender" value="1" {{ old('gender', $contact['gender'] ?? '') == 1 ? 'checked' : '' }}>
                                <label for="men">男性</label>
                                <input class="table-input__sex2" type="radio" id="women" name="gender" value="2" {{ old('gender', $contact['gender'] ?? '') == 2 ? 'checked' : '' }}>
                                <label for="women">女性</label>
                                <input class="table-input__sex3" type="radio" id="others" name="gender" value="3" {{ old('gender', $contact['gender'] ?? '') == 3 ? 'checked' : '' }}>
                                <label for="others">その他</label>
                            </td>
                        </tr>
                        <tr class="content-table__item">
                            <th class="table__item">メールアドレス</th>
                            <td>
                                <input  class="table-input__email" placeholder="例:test@example.com" type="email" name="email" value="{{ old('email', $contact['email'] ?? '') }}">
                            </td>
                        </tr>
                        <tr class="content-table__item">
                            <th class="table__item">電話番号</th>
                            <td>
                                <div class="table-input__tel--space">
                                    <input class="table-input__tel" placeholder="080" type="text" name="tel1" value="{{ old('tel1', substr($contact['tel'] ?? '', 0, 3)) }}">
                                    <span class="tel-">-</span>
                                    <input class="table-input__tel" placeholder="1234" type="text" name="tel2" value="{{ old('tel2', substr($contact['tel'] ?? '', 3, 4)) }}">
                                    <span class="tel-">-</span>
                                    <input class="table-input__tel" placeholder="5678" type="text" name="tel3" value="{{ old('tel3', substr($contact['tel'] ?? '', 7, 4)) }}">
                                </div>
                            </td>
                        </tr>
                        <tr class="content-table__item">
                            <th class="table__item">住所</th>
                            <td>
                                <input class="table-input__address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" type="text" name="address" value="{{ old('address', $contact['address'] ?? '') }}">
                            </td>
                        </tr>
                        <tr class="content-table__item">
                            <th >建物名</th>
                            <td>
                                <input class="table-input__building" placeholder="例:千駄ヶ谷マンション101" type="text" name="building" value="{{ old('building', $contact['building'] ?? '') }}">
                            </td>
                        </tr>
                        <tr class="content-table__item">
                            <th class="table__item">お問い合わせの種類</th>
                            <td>
                                <select class="table-select__contacts" name="category_id" id="category_id">
                                    <option>選択してください</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}" {{ old('category_id', $contact['category_id'] ?? '') == $category['id'] ? 'selected' : '' }}>{{ $category['content'] }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr class="content-table__item">
                            <th class="table__item">お問い合わせ内容</span></th>
                            <td>
                                <textarea class="table__contact-textarea" placeholder="お問い合わせ内容をご記載ください" name="detail" id="detail">{{ old('detail', $contact['detail'] ?? '') }}</textarea>
                            </td>
                        </tr>
                    </table>
                    <div class="contact-button">
                        <button class="contact-button__submit">確認画面</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection