<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //Action
    public function __construct(Request $request){
        /*
        Neu la trang danh sach chuyen muc => hien thi ra dong chu : xin chao 
        */
        if($request->is('categories')){
            echo '<h3>Welcome Dinh Canh</h3>';
        }
    }
    //GET
    public function index(Request $request){
        
        // $allData = $request->all();
        // dd($allData);
        // $path = $request->path();
        // dd($path);
        // $id = $request->id;
        // $id = $request->query('id');
        return view('clients/categories/list');
    }
    public function getCategory($id){
        return view('clients/categories/edit');
    }
    public function addCategory(Request $request){

        // $path = $request->path();
        // echo $path;
        //dd($path);
        //$categoryName = $request->old('category_name');
        // return view('clients/categories/add',compact('categoryName'));
        $request->old('category_name');
        //echo $request->old('_token');
        return view('clients/categories/add');
    }

    //POST
    public function updateCategory($id){
        return 'Submit sua chuyen muc' .$id;
    }
    public function handleAddCategory(Request $request){
        // $allData = $request->all();
        // dd($allData);
        // $categoryName = $request->category_name;
        // dd($categoryName);
        if($request->has('category_name')){
            $categoryName = $request->category_name;
            $request->flash();
            return redirect(route('categories.add'));
        }else{
            return 'Empty category_name';
        }
            

        //return redirect(route('categories.add'));
        //return 'Submit handle Chuyen muc';
    }
    public function deleteCategory($id){
        return 'Submit delete chuyen muc';
    }

    public function getUploadFile(){
        return view('clients/categories/uploadfile');
    }
    public function handleFile(Request $request){
        if($request->photo->isValid()){
        $file = $request->file('photo');
        //$path = $file->path();
        $extension = $file->extension();
        //$path = $file->storeAs('imageDinhCanh','avatar_DinhCanh.jpg');
        //$path = $request->photo->store('images');
        //$fileName = $file->getClientOriginalName();
        $fileName = md5(uniqid()).'.'.$extension;
        dd($fileName);
        }else return 'Upload File Fail';
    }
}
