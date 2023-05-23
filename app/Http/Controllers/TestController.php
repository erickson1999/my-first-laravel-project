<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public static function render(){
        $datos = [(object)["name"=>"Ericskon"],(object)["name"=>"Ana"]];
        $datos2 = ["name"=>"Ericskon Raul Quispe Churata"];
        info($datos2["name"]);
        info("hello");
        return view("test",compact("datos","datos2"));
    }
}
