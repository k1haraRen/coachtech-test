@extends('layouts.app_login')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection
@section('content')
    <div class="login__view">
        <div class="login__title">
            <p>Login</p>
        </div>
        <form action="login" method="post">
            @csrf
            <div class="login__content">
                <div class="login__content-box">
                    <div class="login__content-item">
                        <div class="login__content-table">
                            <p class="login-table__name">メールアドレス</p>
                            <div class="login-input__background">
                                <input class="login-table__input" type="email" name="email"
                                    placeholder="例: test@example.com">
                            </div>
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="login__content-table">
                            <p class="login-table__name">パスワード</p>
                            <div class="login-input__background">
                                <input class="login-table__input" type="text" name="password" placeholder="例: coachtechno6">
                            </div>
                            @error('password')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="login__content-bottom">
                        <button class="login__button-submit" type="submit">登録</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection