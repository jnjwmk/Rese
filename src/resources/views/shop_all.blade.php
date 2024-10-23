@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_all1.css')}}">
@endsection('css')

@section('nav')
<nav>
    <form>
        <ul>
            <li>
                <select class="areas_select" name="areas" id="areas">
                    <option>All area</option>
                    @foreach($areas as $area)
                    <option value="{{ $area->id}}">{{ $area->name }} </option>
                    @endforeach
                </select>

                <select class="genres_select" name="genres" id="genres">
                    <option>All genres</option>
                    @foreach($genres as $genre)
                    <option value="{{ $genre->id}}">{{ $genre->name }}</option>
                    @endforeach
                </select>

            </li>
        </ul>
    </form>
</nav>
@endsection('nav')


@section('main')

@foreach($restaurants as $restaurant)
<div class="content">
    <div class="restaurant">
        <div class="restaurant-img">
            @switch($restaurant->genre->id)
            @case(1)
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="寿司" />
            @break
            @case(2)
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg" alt="焼肉">
            @break
            @case(3)
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg" alt="居酒屋">
            @break
            @case(4)
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg" alt="イタリアン">
            @break
            @case(5)
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg" alt="ラーメン">
            @endswitch
        </div>

        <div class="restaurant-text">
            <h3>{{ $restaurant -> name }}</h3>
            <p class="restaurant-area">#{{ $restaurant->area->name}}</p>
            <p class="restaurant-genre">#{{ $restaurant->genre->name}}</p>

            <a class="detail-btn" href="{{ route('')}}">詳しくみる</a>

        </div>
    </div>
</div>
@endforeach
@endsection