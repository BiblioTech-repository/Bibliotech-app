<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ManyArticlesController;
use App\Mail\ContactUsMailable;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Mail;
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

Route::get('/',[PagesController::class,'index']);
// Route::get('/articles',[PagesController::class,'allArticles']);

Route::resource('/articles', ManyArticlesController::class);
Route::resource('/my-articles', ArticlesController::class);
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/downloads{doc_path}',[ArticlesController::class,'getDownload']);

// Route::get('/contactUs', function(){
//     $email = new ContactUsMailable;

//     Mail::to('kevincampa01@gmail.com')->send($email);

//     return "Message has been sent.";
// });


Route::get('contactUs', [ContactUsController::class, 'index'])->name('contactUs.index');

Route::post('contactUs', [ContactUsController::class, 'store'])->name('contactUs.store');
