<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\BlogCategory;

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
// Main Page
Route::get('home', 'SiteController@home')->name('home');
Route::get('/', 'SiteController@home')->name('home');
Route::get('/sortable', [App\Http\Livewire\Tasks::class, 'render'])->name('sortable');

// Contact Post
Route::post('/contato', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');

// Blog
Route::get('blog', 'SiteController@blog')->name('blog');
Route::prefix('blog')->group(function () {
    Route::get('/pesquisa', 'SiteController@blogsearch')->name('blogsearch');
    Route::get('/mes/{month}', 'SiteController@blogmonth')->name('blogmonth');
    Route::get('/categoria/{blogcategory}/{slug?}', 'SiteController@blogcategory')->name('blogcategory');
    Route::get('/{post}/{slug?}', 'SiteController@blogpost')->name('blogpost');
});

// Administrative Routes
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('/blogCategories', 'BlogCategoryController');
    Route::resource('/posts', 'PostController');
    Route::resource('/contacts', 'ContactController');
    Route::resource('/galeries', 'GaleryController');

});
