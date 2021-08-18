<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function(){
    return view('about');
});
*/
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/', function(){
    return view('home');
});

Route::view('/about', 'about');

Route::get('/blog', function(){
    return view('blog');
});
Route::get('/meem', [PagesController::class, 'abc']);

//laravel 7
//Route::get('/example', 'PagesController@example');
//laravel 8
Route::get('/example', [PagesController::class, 'example']);
Route::get('/babu',[PagesController::class, 'babu']);
Route::get('/mow',[PagesController::class, 'mow']);
Route::get('/monika',[PagesController::class, 'monika']);
Route::get('/nishi',[PagesController::class, 'nishi']);
Route::get('/tanzila',[PagesController::class, 'tanzila']);


//Basic CRUD start from here
Route::get('/admin/post', [PagesController::class, 'post_index'])->name('post.index');



Route::get('/admin/book', [PagesController::class, 'book_index'])->name('book.index');
route::get('/admin/book/create',[PagesController::class, 'book_create'])->name('book.create');
Route::post('/admin/book',[PagesController::class, 'book_store'])->name('book.store');
Route::get('/admin/book/{id}', [PagesController::class, 'book_show'])->name('book.show');
ROute::delete('/admin/book/{id}', [PagesController::class, 'book_destroy'])->name('book.destroy');
Route::get('admin/book/{id}/edit', [PagesController::class, 'book_edit'])->name('book.edit');
Route::put('/admin/book/{id}', [PagesController::class, 'book_update'])->name('book.update');

Route::get('/admin/city', [PagesController::class, 'city_index'])->name('city.index');
Route::get('/admin/city/create',[PagesController::class, 'city_create'])->name('city.create');
Route::post('admin/city',[PagesController::class,'city_store'])->name('city.store');
Route::get('admin/city/{id}',[PagesController::class, 'city_show'])->name('city.show');
Route::delete('/admin/city/{id}', [PagesController::class, 'city_destroy'])->name('city.destroy');

Route::get('/admin/country', [PagesController::class, 'country_index'])->name('country.index');  
Route::get('/admin/country/create', [PagesController::class, 'country_create'])->name('country.create');
Route::post('/admin/country', [PagesController::class, 'country_store'])->name('country.store');
Route::get('/admin/country/{id}',[PagesController::class,'country-show'])->name('country.show');
Route::delete('/admin/country/{id}',[PagesController::class,'country_destroy'])->name('country.destroy');
