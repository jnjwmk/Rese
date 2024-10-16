@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css')}}">
@endsection('css')

@section('main')
<div class="register-form">
    <h4 class="register-form__heading">Registration</h4>

    <form class="register-form__inner">
        @csrf
        <div class="register-form__group">
            <label for="username"></label>
            <input class="register-form__input" type="text" id="username" name="name" value=""
                placeholder="Username"></input>
        </div>
        <div class="register-form__group">
            <label for="email"></label>
            <input class="register-form__input" type="email" id="email" name="email" value=""
                placeholder="Email"></input>
        </div>
        <div class="register-form__group">
            <label for="password"></label>
            <input class="register-form__input" type="password" id="password" name="password" value=""
                placeholder="Password"></input>
        </div>

        <input class="register-btn" type="submit" value="登録">
    </form>
</div>


@endsection(' main')