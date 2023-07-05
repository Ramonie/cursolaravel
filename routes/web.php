<?php

use App\Http\Controllers\ProdutoController;
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


Route::get('/',[ProdutoController::class,'index'])-> name('produto.index');
Route::get('/produto/{id}',[ProdutoController::class, 'show'])->name('produto.show');
*/
Route::resource('produtos', ProdutoController::class);

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/empresa', function(){
    return view('site/empresa');
});
Route::any('/any', function(){
    return "Permite todo tipo de acesso http";
});
Route::match(['get','post'],'/match', function(){
    return "Apenas acessos definidos";
});
Route::get('/produto/{id}/{cat}', function($id, $cat){
    return "O id do produto é: ".$id."<br>"."A categoria é: ".$cat;
});
Route::get('/sobre', function(){
    return redirect('/empresa');

Route::redirect('/sobre', '/empresa');
Route::view('/empresa', 'site/empresa');

Route::get('/news', function(){
        return view('news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});
});*/