<?php

namespace App\Http\Controllers;

use App\Nomer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NomerController extends Controller
{
    public function index(){
        $nomers = Nomer::all();
        return view('nomer.index', ['nomers' => $nomers]);
    }


    public function show($id)
    {
        $nomerRes = Nomer::where('id','=', $id)->firstOrFail();

        return view('nomer.nomer', ['nomer' => $nomerRes]);
    }
}
