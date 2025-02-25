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
                <form action="/admin/search" method="get">
                    @csrf
                    <div class="admin__search-table">
                        <input type="text" class="search-table__input" placeholder="   名前やメールアドレスを入力してください" name="keyword"
                            value="{{ old('keyword') }}">
                        <div class="search-table__category">
                            <select class="search__category-sex" name="gender" id="">
                                <option value="">性別</option>
                                <option value="1">男性</option>
                                <option value="2">女性</option>
                                <option value="3">その他</option>
                            </select>
                            <select name="category_id" class="search__category-kind">
                                <option value="">お問い合わせの種類</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                                @endforeach
                            </select>
                            <input class="search__category-ymd" type="date" name="created_at">
                        </div>
                        <div class="search-button">
                            <button type="submit" class="search-button__submit">検索</button>
                            <button type="reset" class="search-button__reset" name="reset" value="1">リセット</button>
                        </div>
                    </div>
                </form>
                <div class="admin__pagination--export">
                    <button type="button" class="admin-button__export">エクスポート</button>
                    {{ $contacts->appends(request()->query())->links() }}
                </div>
                <div class="admin-table">
                    <table class="admin-table__inner">
                        <tr class="admin-table__row">
                            <th class="admin-table__header">
                                <span class="admin-table__header-span1">お名前</span>
                            </th>
                            <th class="admin-table__header">
                                <span class="admin-table__header-span2">性別</span>
                            </th>
                            <th class="admin-table__header">
                                <span class="admin-table__header-span3">メールアドレス</span>
                            </th>
                            <th class="admin-table__header">
                                <span class="admin-table__header-span4">お問い合わせの種類</span>
                            </th>
                            <th>
                                <span class="admin-table__header-span5"></span>
                            </th>
                        </tr>
                        @foreach ($contacts as $contact)
                            <tr class="admin-table__row">
                                <div class="detail-form__item">
                                    <td class="admin-table__item">
                                        <span
                                            class="admin-table__item-span1">{{ $contact['last_name'] }}&emsp;{{ $contact['first_name'] }}</span>
                                    </td>
                                    <td class="admin-table__item">
                                        <span class="admin-table__item-span2">
                                            <?php    if ($contact['gender'] == 1) {
            echo "男性";
        } elseif ($contact['gender'] == 2) {
            echo "女性";
        } else {
            echo "その他";
        } ?>
                                        </span>
                                    </td>
                                    <td class="admin-table__item">
                                        <span class="admin-table__item-span3">{{ $contact['email'] }}</span>
                                    </td>
                                    <td class="admin-table__item">
                                        <span class="admin-table__item-span4">{{ $contact->Category->content }}</span>
                                    </td>
                                    <td class="detail-form__button">
                                        <button class="detail-form__button-submit open-modal" type="button"
                                            data-id="{{ $contact->id }}"
                                            data-name="{{ $contact['last_name'] }} {{ $contact['first_name'] }}"
                                            data-gender="{{ $contact['gender'] == 1 ? '男性' : ($contact['gender'] == 2 ? '女性' : 'その他') }}"
                                            data-email="{{ $contact['email'] }}" data-tel="{{ $contact['tel'] }}" data-address="{{ $contact['address'] }}"
                                            data-building="{{ $contact['building'] }}" data-category="{{ $contact->Category->content }}"
                                            data-detail="{{ $contact['detail'] }}">
                                            詳細
                                        </button>
                                    </td>
                                </div>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="modal" class="modal" style="display: none;">
        <div class="modal__content">
            <span class="close">&times;</span>
            <table class="modal__content-table--list">
                <tr>
                    <th>お名前</th>
                    <td><span id="modal-name"></span></td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td><span id="modal-gender"></span></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><span id="modal-email"></span></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><span id="modal-tel"></span></td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td><span id="modal-address"></span></td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td><span id="modal-building"></span></td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td><span id="modal-category"></span></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><span id="modal-detail"></span></td>
                </tr>
            </table>
            <button type="button" class="modal-button__request">削除</button>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
                let modal = document.getElementById("modal");
                let closeBtn = document.querySelector(".close");
                let detailButtons = document.querySelectorAll(".open-modal");
                let deleteButton = document.querySelector(".modal-button__request");

                let selectedContactId = null;

                detailButtons.forEach(button => {
                    button.addEventListener("click", function () {
                        document.getElementById("modal-name").textContent = this.dataset.name;
                        document.getElementById("modal-gender").textContent = this.dataset.gender;
                        document.getElementById("modal-email").textContent = this.dataset.email;
                        document.getElementById("modal-tel").textContent = this.dataset.tel;
                        document.getElementById("modal-address").textContent = this.dataset.address;
                        document.getElementById("modal-building").textContent = this.dataset.building;
                        document.getElementById("modal-category").textContent = this.dataset.category;
                        document.getElementById("modal-detail").textContent = this.dataset.detail;

                        // 削除対象のIDを保存
                        selectedContactId = this.dataset.id;

                        modal.style.display = "flex";
                    });
                });

                closeBtn.addEventListener("click", function () {
                    modal.style.display = "none";
                });

                window.addEventListener("click", function (event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                });

                // 削除ボタンの処理（確認ダイアログなし）
                deleteButton.addEventListener("click", function () {
                    if (!selectedContactId) return;

                    fetch(`/admin/delete/${selectedContactId}`, {
                        method: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                            "Content-Type": "application/json"
                        }
                    })
                        .then(response => response.json())
                        .then(data => {
                            modal.style.display = "none"; // モーダルを閉じる
                            location.reload(); // ページをリロードして最新のデータを表示
                        })
                        .catch(error => console.error("エラーですわ💦", error));
                });
            });
    </script>
@endsection