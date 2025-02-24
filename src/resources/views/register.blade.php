@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection
@section('content')
    <div class="register__view">
        <div class="register__title">
            <p>Register</p>
        </div>
        <div class="register__content">
            <div class="register__content-box">
                <div class="register__content-item">
                    <div class="register__content-table">
                        <p class="register-table__name">お名前</p>
                        <div class="register-input__background">
                            <input class="register-table__input" type="text" name="name" placeholder="例: 山田  太郎">
                        </div>
                    </div>
                    <div class="register__content-table">
                        <p class="register-table__name">メールアドレス</p>
                        <div class="register-input__background">
                            <input class="register-table__input" type="email" name="email"
                                placeholder="例: test@example.com">
                        </div>
                    </div>
                    <div class="register__content-table">
                        <p class="register-table__name">パスワード</p>
                        <div class="register-input__background">
                            <input class="register-table__input" type="text" name="password" placeholder="例: coachtechno6">
                        </div>
                    </div>
                </div>
                <div class="register__content-bottom">
                    <button class="register__button-submit" type="submit">登録</button>
                </div>
            </div>
        </div>
    </div>
@endsection