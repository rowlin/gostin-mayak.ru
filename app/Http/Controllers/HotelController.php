<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    public function index(){
        return view('hotel.index');

    }

    public function contact(){
        return view('hotel.contakt');
    }
}
