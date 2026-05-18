<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RealisationController;
use GuzzleHttp\Promise\Create;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('equipe', function () {
    return view('equipe');
});
Route::get('apropos', function () {
    return view('apropos');
});
Route::get('actualite', function () {
    return view('actualite');
});
Route::get('consultation', function () {
    return view('consultation');
});


Route::get('travaux', function () {
    return view('travaux');
});Route::get('hygiene', function () {
    return view('hygiene');
});Route::get('electrification', function () {
    return view('electrification');
});Route::get('developpement', function () {
    return view('developpement');
});Route::get('changement', function () {
    return view('changement');
});Route::get('assistance', function () {
    return view('assistance');
});
Route::get('agriculture', function () {
    return view('agriculture');
});
Route::get('hydraulique', function () {
    return view('hydraulique');
});




Route::get('ajout_actualite',[ActualiteController::class, 'create']);
Route::post('ajout_actualite',[ActualiteController::class, 'store'])->name('ajout_actualite');
Route::get('actualite',[ActualiteController::class, 'index'])->name('actualite');
Route::get('/update_actualite/{id}', [ActualiteController::class, 'edit'])->name('edit');
Route::put('/update_actualite/{id}', [ActualiteController::class, 'update'])->name('update_actualite');
Route::get('/table_actualite', [ActualiteController::class, 'table_actualite'])->name('table_actualite');
Route::delete('/destroye/{id}', [ActualiteController::class, 'destroye'])->name('destroye');

Route::get('ajout_realisation',[RealisationController::class, 'creat']);
Route::post('ajout_realisation',[RealisationController::class, 'stor'])->name('ajout_realisation');
Route::get('realisation',[RealisationController::class, 'realisation'])->name('realisation');
Route::get('/update_realisation/{id}', [RealisationController::class, 'edite'])->name('edite');
Route::put('/update_realisation/{id}', [RealisationController::class, 'updates'])->name('update_realisation');
Route::get('/table_realisation', [RealisationController::class, 'table_realisation'])->name('table_realisation');
Route::get('detail/{id}',[RealisationController::class, 'detail'])->name('detail');
Route::delete('/destroy/{id}', [RealisationController::class, 'destroy']) ->name('destroy');


Route::post('contact', [ServiceController::class, 'envoie_mail'])->name('envoie_mail');
Route::post('newsletter', [ServiceController::class, 'newsletter'])->name('newsletter');
Route::post('/consultation', [ServiceController::class, 'consultationMail'])->name('consultation.consultationMail');
Route::get('/home', [ServiceController::class, 'visiteur'])->name('home');

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
