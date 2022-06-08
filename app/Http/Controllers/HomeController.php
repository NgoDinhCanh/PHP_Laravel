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
        $this->data['errorMessage'] = 'Please check input data !';
        return view('clients.add',$this->data);
    }
    public function postAdd(Request $request){
        $request->validate([
            'product-name' => 'required|min:6',
            'product-price' => 'required|integer'
        ],[
            'product-name.required' => 'Please input Product name !',
            'product-name.min' => 'Please input Name min :min characters !',
            'product-price.required' => 'Please input Product price !',
            'product-price.integer' => 'Please input Price integer !'
        ]);
        return 'Add Product Complete';
    }
    public function putAdd(Request $request){
        return 'Phuong thuc PUT';
    }
    public function getArray(){
        $contentArr = [
            'name' => 'DinhCanh',
            'age' => 25,
            'job' => 'Full Stack Developer'
        ];
        return $contentArr;
    }
    public function dowloadPicture(Request $request){
        if(!empty($request->picture)){
            $picture = trim($request->picture);
            $fileName = basename($picture);
            //$fileName = uniqid().'.jpg';
            return response()->streamDownload(function() use($picture){
                $pictureContent = file_get_contents($picture);
                echo $pictureContent;
            },$fileName);
        }
    }
}