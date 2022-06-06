<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Action
    public function index(){
        return 'Home';
    }
    public function getProductDetail($id){
        return view('clients/products/detail',compact('id'));
    }
}
