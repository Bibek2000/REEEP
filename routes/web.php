<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\Frontend\frontendController::class, 'views'])->name('views.frontned');



Auth::routes();

//Route::get('/home', [\App\Http\Controllers\Frontend\frontendController::class, 'index'])->name('home');
//index page route(frontend)
Route::get('/home', [\App\Http\Controllers\Frontend\frontendController::class, 'views'])->name('views.frontend');

//inner page routes
Route::get('/about', [\App\Http\Controllers\Frontend\frontendController::class,'about'])->name('view.about');
Route::get('/working-area', [\App\Http\Controllers\Frontend\frontendController::class, 'allWorkingArea'])->name('view.allworkingareas');
Route::get('/workingarea/{working_area}', [\App\Http\Controllers\Frontend\frontendController::class,'workingArea'])->name('view.workingarea');
Route::get('/knowledge-and-resources', [\App\Http\Controllers\Frontend\frontendController::class, 'allKnowledge'])->name('view.allKnowledge');
Route::get('/singlenews/{id}', [\App\Http\Controllers\Frontend\frontendController::class, 'singleNews'])->name('view.one');
Route::get('/news-events/{id}', [\App\Http\Controllers\Frontend\frontendController::class, 'allNews'])->name('view.news');
Route::get('/gallery', [\App\Http\Controllers\Frontend\frontendController::class, 'allGallery'])->name('view.gallery.all');
Route::get('/news-events',[\App\Http\Controllers\Frontend\frontendController::class, 'allNewsEvents'])->name('view.allNewsEvents');




Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('layouts.app1');
    });
    // Menu Routes
    Route::resource('menus', \App\Http\Controllers\Backend\MenuController::class);
    Route::patch('/status/approval/{id}', [\App\Http\Controllers\Backend\MenuController::class, 'statusApproval'])->name('status.approval');
//Post reorder route

    Route::get('/post/order', [\App\Http\Controllers\Backend\PostController::class ,'post_order'])->name('post.post_order');
    Route::post('/post/post_order_change', [\App\Http\Controllers\Backend\PostController::class, 'post_order_change'])->name('post.order_change');

// Banner section Routes
    Route::resource('banners', \App\Http\Controllers\Backend\BannerController::class);


// About section Routes
    Route::resource('abouts', \App\Http\Controllers\Backend\AboutController::class);


//Working Areas section routes
    Route::resource('workingareas',\App\Http\Controllers\Backend\WorkingAreaController::class);

//Knowledge and resources section
    Route::resource('knowledges',\App\Http\Controllers\Backend\KnowledgeController::class);

    //Contact Us route section
    Route::resource('contacts', \App\Http\Controllers\Backend\ContactController::class);

//News and events
    Route::resource('news', \App\Http\Controllers\Backend\NewsController::class);

//Partner
    Route::resource('partners', \App\Http\Controllers\Backend\PartnersController::class);


//Albums route section
    Route::resource('albums', \App\Http\Controllers\Backend\AlbumController::class);

//Gallery route section
    Route::resource('galleries', \App\Http\Controllers\Backend\GalleryController::class);

//contact_info (phone) route section
    Route::resource('phones', \App\Http\Controllers\Backend\PhoneController::class);

//social media links route
    Route::resource('links', \App\Http\Controllers\Backend\LinkController::class);

//Admin profile view
    Route::resource('admin', \App\Http\Controllers\AdminController::class);
    Route::patch('/password_update/{admin}', [AdminController::class, 'passwordUpdate'])->name('admin.passwordUpdate');
});

//for mail
Route::post('/contact/mail', [\App\Http\Controllers\MailController::class, 'stores'])->name('mail.send');


// Language translator route
Route::get('lang/change', [\App\Http\Controllers\LangController::class, 'change'])->name('changeLang');

//for search
Route::get('/search', [\App\Http\Controllers\Frontend\frontendController::class, 'search'])->name('news.search');
Route::post('/search', [\App\Http\Controllers\Frontend\frontendController::class, 'search']);


