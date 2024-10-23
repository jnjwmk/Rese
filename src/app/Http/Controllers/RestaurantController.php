<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index ()
    {
        $areas = Area::all();
        $genres = Genre::all();
        $restaurants = Restaurant::all();

        return view('shop_all',compact('areas','genres','restaurants'));
    }





}