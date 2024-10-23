@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register1.css')}}">
@endsection('css')

@section('main')
<div class="register-form">
    <h4 class="register-form__heading">Registration</h4>

    <form class="register-form__inner" action="/register" method="post">
        @csrf
        <div class="register-form__group">
            <label for="username"></label>
            <input class="register-form__input" type="text" id="username" name="name" value="{{ old ('name')}}"
                placeholder="Username">
            @error ('name')
            {{ $message }}
            @enderror
        </div>
        <div class="register-form__group">
            <label for="email"></label>
            <input class="register-form__input" type="email" id="email" name="email" value=" {{ old('email')}}"
                placeholder="Email">
            @error ('email')
            {{ $message }}
            @enderror
        </div>
        <div class="register-form__group">
            <label for="password"></label>
            <input class="register-form__input" type="password" id="password" name="password" placeholder="Password">
            @error ('password')
            {{ $message }}
            @enderror
        </div>

        <input class="register-btn" type="submit" value="登録">
    </form>
</div>


@endsection('main')