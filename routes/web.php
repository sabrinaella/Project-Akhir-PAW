<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuReviewController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [MenuController::class, 'index'])->name('home');
// Route::get('/home/menu', [MenuController::class, 'index']);

Route::get('/home/menu/{id}', [
    MenuController::class, 'specificMenu'
])->where('id', '[0-9]+')->name('menu_each');

Route::post('/add-review', [
    MenuReviewController::class, 'reviewBaru'
]);

Route::get('/home/feedback', [
    QuestionController::class, 'index'
])->name('feedback');

Route::post('/new-feedback', [
    FeedbackController::class, 'newFeedback'
]);

Route::get('/home/menu/{category}', [
    MenuController::class, 'categoryDetails'
])->name('category_each');

Route::get('/home/cart', [
    CartController::class, 'viewCart'
]);

Route::get('/home/menu/{category}/search', [
    MenuController::class, 'cariMenu'
])->name('cari_menu');

Route::post('/add-to-cart', [
    CartController::class, 'addItem'
]);

Route::get('/home/menu/{category}/sort/desc', [
    
]);