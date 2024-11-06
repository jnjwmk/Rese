@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail1.css')}}">
@endsection('css')

@section('main')
<div class="detail_reservation">
    <div class="left-detail">
        @if ($restaurant)
        <h2 class="restaurant-name">{{ $restaurant -> name }}
        </h2>
        @else
        <h2 class="restaurant-name">見つかりません
        </h2>
        @endif

        <div class="detail-img">
            @switch($restaurant->genre->id)
            @case(1)
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="寿司">
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
        <div class="area_genre">
            <p class="restaurant-area-detail">#{{$restaurant->area->name}}</p>
            <p class="restaurant-genre-detail">#{{$restaurant->genre->name}}</p>
        </div>
        <div class="restaurant-detail">{{$restaurant->detail}}
        </div>
    </div>

</div>
@endsection