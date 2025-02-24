@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection
@section('content')
    <div class="admin__view">
        <div class="admin__title">
            <p>Admin</p>
        </div>
        <div class="admin__content">
            <div class="admin__content-item">
                <div class="admin__search-table">
                    <input type="text" class="search-table__input" placeholder="   名前やメールアドレスを入力してください">
                    <div class="search-table__category">
                        <select class="search__category-sex" name="" id="">
                            <option value="">性別</option>
                        </select>
                        <select name="" id="" class="search__category-kind">
                            <option value="">お問い合わせの種類</option>
                        </select>
                        <select class="search__category-ymd">
                            <option value="">年/月/日</option>
                        </select>
                    </div>
                    <div class="search-button">
                        <button type="submit" class="search-button__submit">検索</button>
                        <button type="reset" class="search-button__reset">リセット</button>
                    </div>
                </div>
                <div class="admin__pagination--export">
                    <button type="button" class="admin-button__export">エクスポート</button>
                    <span>pagination</span>
                </div>
                <div class="admin-table">
                    <table class="admin-table__inner">
                        <tr class="admin-table__row">
                            <th class="admin-table__header">
                                <span class="admin-table__header-span">お名前</span>
                            </th>
                            <th class="admin-table__header">
                                <span class="admin-table__header-span">性別</span>
                            </th>
                            <th class="admin-table__header">
                                <span class="admin-table__header-span">メールアドレス</span>
                            </th>
                            <th class="admin-table__header">
                                <span class="admin-table__header-span">お問い合わせの種類</span>
                            </th>
                            <th>
                                <span class="admin-table__header-span"></span>
                            </th>
                        </tr>
                        <tr class="admin-table__row">
                            <div class="detail-form__item">
                                <td class="admin-table__item">
                                    <span class="admin-table__item-span1">山本 太郎</span>
                                </td>
                                <td class="admin-table__item">
                                    <span class="admin-table__item-span1">男性</span>
                                </td>
                                <td class="admin-table__item">
                                    <span class="admin-table__item-span2">@example</span>
                                </td>
                                <td class="admin-table__item">
                                    <span class="admin-table__item-span2">商品の交換について</span>
                                </td>
                                <td class="detail-form__button">
                                    <button class="detail-form__button-submit" type="submit">
                                        詳細
                                    </button>
                                </td>
                            </div>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection