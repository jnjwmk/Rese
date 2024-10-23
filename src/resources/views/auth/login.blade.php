@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset ('css/auth/login1.css')}}">
@endsection('css')

@section('main')
<div class="login-form">
    <h4 class="login-form__heading">Login</h4>

    <form class="login-form__inner" action="/login" method="post">
        @csrf
        <div class="login-form__group">
            <label for="email"></label>
            <input class="login-form__input" type="email" id="email" name="email" value="" placeholder="Email">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="login-form__group">
            <label for="password"></label>
            <input class="login-form__input" type="password" id="password" name="password" value=""
                placeholder="Password">
            @error('password')
            {{ $message }}
            @enderror
        </div>

        <input class="login-btn" type="submit" value="ログイン">
    </form>
</div>
@endsection('main')