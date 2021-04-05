<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactUsController;
use App\Models\contactus;

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


Route::view('/portfolio','main.portfolio');

Route::view('/about','main.about');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/services',[ProductController::class,'index'])->name('temp1');

//admin side route
Route::get('products',[ProductController::class,'insertItems'])->name('insertItems');

Route::post('products',[ProductController::class,'storeItems'])->name('storeItems');

Route::get('footer',[ContactUsController::class,'createContact'])->name('create');

Route::post('footer',[ContactUsController::class,'storeContact'])->name('store');

Route::get('contact',[ContactUsController::class,'index'])->name('viewcontact');

Route::delete('/deletecontact/{id}',[ContactUsController::class,'deletecontact'])->name('deletecontact');

Route::delete('/forcedeletecontact/{id}',[ContactUsController::class,'forcedeletecontact'])->name('forcedeletecontact');

Route::get('/readsoftdelete',function(){

    $post = contactus::withTrashed()->where('id',33)->restore();
    return $post;
});

Route::get('/softdelete',function(){

    $post = contactus::find(33);

    $post->delete();
    return view('main.viewcontact');
});

Route::view('insertcontact' , 'layouts.footer');

// Route::get('/find/{id}',[ContactUsController::class,'index2']
// ,function(){

    // $post = contactus::find(33);

    // echo $post->title;

    // return view('main.viewcontact');
// }
// );

// Route::get('/findwhere', function(){
//     // $posts = Post::where('id',5)->orderBy('id','desc')->take(1)->get();
//     $posts = contactus::where('id',31)->get();

//     echo $posts;

//     return view('main.new');
// });

Route::get('/find',[ContactUsController::class,'find'])->name('findcontact');

Route::get('/findmore',[ContactUsController::class,'findmore'])->name('findmorecontact');

Route::get('/restore' , function(){

    $post = contactus::withTrashed()->restore();
    return back();    
});

Route::get('edit/{id}', [ContactUsController::class,'editData'])->name('editcontact');

Route::post('edit', [ContactUsController::class,'updateData'])->name('updatecontact');

