<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Action
    public $data = [];
    public function index(){
        $this->data['welcome'] = 'Xin chao moi ng ';
        $this->data['dataArr'] = [
            'Item 1',
            'Item 2',
            'Item 3'
        ];
        $this->data['message'] = 'Complete';
        return view('clients.home',$this->data);
    }
    public function products(){
        
        return view('clients.products',$this->data);
    }

    public function getAdd(){
        $this->data['title']='Add product';
        return view('clients.add',$this->data);
    }
    public function postAdd(Request $request){
        dd($request);
    }
    public function putAdd(Request $request){
        return 'Phuong thuc PUT';
    }
}