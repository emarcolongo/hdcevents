<?php

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

use App\Http\Controllers\EventController;
use App\Http\Controllers\AulaController;

Route::get('/',[EventController::class,'index']);
Route::get('/events/create',[EventController::class,'create'])->middleware('auth');
Route::post('/events',[EventController::class,'store']);
Route::get('/events/{id}',[EventController::class,'show']);
Route::get('/dashboard',[EventController::class,'dashboard'])->middleware('auth');
Route::delete('/events/{id}',[EventController::class,'destroy'])->middleware('auth');
Route::get('/events/edit/{id}',[EventController::class,'edit'])->middleware('auth');
Route::put('/events/update/{id}',[EventController::class,'update'])->middleware('auth');
Route::post('/events/join/{id}',[EventController::class,'joinEvent'])->middleware('auth');
Route::delete('/events/leave/{id}',[EventController::class,'leaveEvent'])->middleware('auth');

Route::get('/default', function () {
    return view('default');
});

Route::get('/aulas', function() {
    return view('/aulas/aulas');
});

Route::get('/aula/1', function() {
    return view('/aulas/aula01');
});

Route::get('/aula/2', function() {
    return view('/aulas/aula02');
});

Route::get('/aula/3', function() {
    return view('/aulas/aula03');
});

Route::get('/aula/4', function () {
    $appName = "Laravel HDCEvents";
    $versao = "1.0";
    $msg = ["Paulo","Tania","Eduardo","Fernanda"];
    return view('/aulas/aula04',
        [
            'appName'=>$appName, 
            'versao'=>$versao,
            'familia'=>$msg
        ]);
});

Route::get('/aula/5', function () {
    $appName = "Laravel HDCEvents";
    $versao = "1.0";
    $msg = ["Paulo","Tania","Eduardo","Fernanda"];
    return view('/aulas/aula05',
        [
            'appName'=>$appName, 
            'versao'=>$versao,
            'familia'=>$msg
        ]);
});

Route::get('/aula/6', function () {
    return view('/aulas/aula06');
});

Route::get('/produto/{id}', function ($id) {
    return view('resource/produto',['id'=>$id]);
});

Route::get('/produtos/{id?}', function ($id = null) {
    return view('resource/produtos',['id'=>$id]);
});

Route::get('/pesquisa', function () {
    $nome = request('nome');
    $idade = request('idade');
    return view('resource/pesquisa',['nome'=>$nome,'idade'=>$idade]);
});

Route::get('/aulas/{id}',[AulaController::class,'index']);

/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/