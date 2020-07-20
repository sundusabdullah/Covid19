<?php

namespace App\Http\Controllers;
use app\information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class covid19_information extends Controller
{
    public function show(){

        $data= Http::get('https://coronavirus-19-api.herokuapp.com/countries')->json();
        // dd($data);
        return view('informationShow', ['data'=>$data]);
    }

    public function store(){

    }
}
