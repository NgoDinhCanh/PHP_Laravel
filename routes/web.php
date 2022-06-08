<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',function(){
//     $html ='<h1>Ngo Dinh Canh</h1>';
//     return $html;
// });

// // Route::get('/login',function(){
// //     return view('form');
// // });

// // Route::post('/login',function(){
// //     return 'Phuong thuc Post';
// // });

// // Route::put('/login',function(){
// //     return 'Phuong thuc PUT';
// // });

// // Route::delete('/login',function(){
// //     return 'Phuong thuc DELETE';
// // });

// // Route::patch('/login',function(){
// //     return 'Phuong thuc PATCH';
// // });
// // Route::match(['get','post'],'/login',function(){
// //     return $_SERVER['REQUEST_METHOD'];
// // });

// // Route::get('/show', function(){
// //     return view('form');
// // });
// // Route::any('/login',function(Request $request){
// //     return $request->method();
// // });
// // Route::redirect('/login','https://google.com');
// // Route::redirect('/login-show','show');
// // Route::view('show-form','form');

// Route::get('/',function(){
//     return view('home');
// });

// Route::prefix('admin')->group(function(){
//     Route::get('/login',function(){
//         return 'Phuong thuc GET';
//     });
//     Route::get('/show', function(){
//         return view('form');
//     });
//     Route::get('/login/{id}',function($id){
//         $content = 'Phuong thuc GET voi tham so : ';
//         $content.='id = '.$id;
//         return $content;
//     });
//     Route::get('/tintuc/{content}-{id}',function($content,$id){
//         $content = 'Phuong thuc GET voi tham so : ';
//         $content.='id = '.$id;
//         return $content;
//     });
//     Route::get('/content/{info?}-{id?}.html',function($info=null,$id=null){
//         $content = 'Phuong thuc GET voi tham so : ';
//         $content.='id = '.$id .'<br/>';
//         $content.='info = ' .$info;
//         return $content;
//     })->where([
//         'info' => '[a-z-]+',
//         'id' => '[0-9]+'
//     ]);
//     Route::get('/content/{info}-{id}.html',function($info,$id){
//         $content = 'Phuong thuc GET voi tham so : ';
//         $content.='id = '.$id .'<br/>';
//         $content.='info = ' .$info;
//         return $content;
//     })->where('info','[a-z-]+')->where('id','[0-9]+');
//     Route::get('/show', function(){
//         return view('form');
//     })->name('admin.show');
//     Route::get('/content/{info?}/{id?}.html',function($info=null,$id=null){
//         $content = 'Phuong thuc GET voi tham so : ';
//         $content.='id = '.$id .'<br/>';
//         $content.='info = ' .$info;
//         return $content;

//     })->where([
//         'info' => '[a-z-]+',
//         'id' => '[0-9]+'
//     ])->name('admin.show-content');
// });
// Route::middleware('admin')->group(function(){
//     return 'This is Laravel';
// });

//Client Route
// Route::get('/',function(){
//     $title = 'Title - Computer';
//     $content = 'Content - Computer';
//     //C1
//     /*
//     $arr =  [
//                 'title' => $title,
//                 'content' => $content
//             ];
//     */
//     //C2 
//     return view('home',compact('title','content')); 
//     //C3 return view('home')->with(['title' => $title,'content' => $content]);
//     //C4 return View::make('home',compact('title','content'));//['title' =>$title,'content'=> $content]);

//     //Using print pdf or excel
//     /*
//     $contentView = view('home',compact('title','content'))->render();
//     dd($contentView);
//     */

// })->name('home');
// Route::prefix('categories')->group(function(){

//     Route::get('/',[CategoriesController::class,'index'])->name('categories.list');

//     Route::get('/edit/{id}',[CategoriesController::class,'getCategory'])->name('categories.edit');

//     Route::get('/add',[CategoriesController::class,'addCategory'])->name('categories.add');
    
//     Route::post('/edit/{id}',[CategoriesController::class,'updateCategory']);

//     Route::post('/add',[CategoriesController::class,'handleAddCategory']);

//     Route::delete('/delete/{id}',[CategoriesController::class,'deleteCategory'])->name('categories.delete');

//     Route::get('/uploadfile',[CategoriesController::class,'getUploadFile']);

//     Route::post('/uploadfile',[CategoriesController::class,'handleFile'])->name('categories.uploadfile');

// });
// //Admin Route
// Route::middleware('auth.admin')->prefix('admin')->group(function(){

//     Route::resource('products',ProductsController::class)->middleware('auth.admin.product');

//     Route::get('/',[DashboardController::class,'index']);
// });

// Route::get('product/{id}',[HomeController::class,'getProductDetail']);

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/products',[HomeController::class,'products'])->name('products');
Route::get('/addproduct',[HomeController::class,'getAdd'])->name('addproduct');
Route::post('/addproduct',[HomeController::class,'postAdd']);
Route::put('/addproduct',[HomeController::class,'putAdd']);

Route::get('/demo-response',function(){
    return 'Demo-response';
});
Route::get('/demo-response-array',function(){
    $contentArr = [
        'name' => 'DinhCanh',
        'age' => 25,
        'job' => 'Full Stack Developer'
    ];
    return $contentArr;
});
Route::get('/demo-response-controller',[HomeController::class,'getArray']);

Route::get('/demo-class-response',function(){
    $content = '<h2> Ngo Dinh Canh </h2>';
    //$response = (new Response($content))->header('Content-Type','application/json');
    $response = (new Response())->cookie('CK01','cookie one',30);

    //dd($response);
    return $response;
});
Route::get('/demo-class-response-2',function(){
    $response = response('Not Found',404);
    //dd($response);
    return $response;
});
Route::get('/demo-get-cookie',function(Request $request){
    return $request->cookie('CK01');
});
Route::get('/demo-response-view',function(){
    //return view('clients.demo-test');
    $response = response()->view('clients.demo-test',[
        'title' => 'Learn HTTP Response'
    ],201)->header('Content-Type','application/json');
    return $response;
});
Route::get('/demo-form',function(){
    return view('clients.demo-test');
})->name('demo-form');
Route::post('/demo-form',function(Request $request){
    if(!empty($request->username) && !empty($request->password)){
        return back()->withInput()->with('message','Validate Complete!');
    }
    return redirect(route('demo-form'))->with('message','Validate fail');
});

Route::get('/dowload-picture',[HomeController::class,'dowloadPicture'])->name('dowload-picture');



