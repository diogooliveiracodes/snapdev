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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::post('/orcamento', 'OrcamentoController@store')->name('orcamento');







// Route::get('/envio-email', function(){

//     $user = new stdClass();
//     $user->name = 'TESTEE';
//     $user->email = "diogo@snapdev.com.br";
//     $user->phone = "123";
//     $user->message= "teste de mensagem";

//     // return new emailOrcamentos($user);
//     Mail::send(new emailOrcamentos($user));
// });
