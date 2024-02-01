<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Pages\Services;
use Illuminate\Filesystem\Filesystem;

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

/*
Route::get('/', function () {

    return view('frontend.index');

})->name('my_index');

*/


/*
Route::get('/', function () {

    return view('frontend.login_ar');

})->name('login_ar');

*/


/*
Route::get('/', function () {

    return view('frontend.login_ar');

})->name('login_ar');


*/


Route::get('/linkstorage', function () {
    File::deleteDirectory(public_path('storage'));
    Artisan::call('storage:link');
});

Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function () {

    //Route::get('/index_ar', 'index_ar')->name('index_ar');
    Route::get('/{id}', 'index_ar')->name('index_ar');
    Route::get('/login_ar', 'login_ar')->name('login_ar');
    Route::get('/', 'index')->name('index');
    Route::get('/all-workers', 'all_workers')->name('all_workers');



    Route::get('/test_join', 'test_join')->name('test_join');
    Route::get('/test', 'test')->name('test');
    Route::post('/store','search_ar');//حفظ سجل جديد 
    Route::post('/insert_login_user','insert_login_user');
    


 


});


//Route::get('/edit/{id}', 'index_ar')->name('editCv');



Route::controller(App\Http\Controllers\modeltes::class)->group(function () {

    Route::get('/mt', 'elq')->name('home');
  

});


Route::controller(App\Http\Controllers\MakeCvOrder::class)->group(function () {

    
    Route::post('/make_cv_order','make_cv_order')->name('make_cv');

});



Route::controller(App\Http\Controllers\Otp::class)->group(function () {

   
    Route::get('/otp/{id}','index_ar')->name('otp_ar');
    Route::get('/test_api','test_api');
    Route::post('/otp/get_code','get_code');
    Route::get('/otp_test_get_code','get_code');

});



//Route::get('services', Services::class)->name('services');







