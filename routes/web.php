<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;  //esse controler foi criado atraves do comandao "php artisan make:controller HomeController" 
use App\Http\Controllers\ProdutoController;

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

//ROTA ORIGINAL DA CRIAÇÃO DO CÓDIGO
// Route::get('/', function () {  
//     return view('welcome');
// });

//OPÇÃO 1 DE CHAMAR A ROTA 
// Route::get('/', function () {           
//     return view('home');               
// });

//OPÇÃO 2 DE CHAMAR A ROTA 
// Route::view('/', 'home');

//CHAMANDO UMA ROTA ATRIBUINDO UMA VARIÁVEL NA FUNÇÃO
// Route::get('/produtos', function($codigo){
//     return view('produto');
// });

//CHAMANDO UM CONTROLLER NA ROTA, PARA ATRAVÉS  DA CLASSE NO CONTROLLER CHAMAR A VIEW
//Route::get('/', 'HomeController@index');  <- Sitax de chmar o controller Abaixo da versão 8.0 do LARAVEL

//CHAMANDO UMA ROTA ATRIBUINDO UMA VARIÁVEL NA REQUISIÇÃO GET
// Route::get('/produtos/{codigo}', function($codigo){  
//     [HomeController::class, 'index'];
// });

//CHAMANDO UM CONTROLLER NA ROTA, PARA ATRAVÉS  DA CLASSE NO CONTROLLER CHAMAR A VIEW
Route::get('/', [HomeController::class, 'index'])->name('paginaHome');   


//REQUISIÇÕES DA ROTA CONTROLLER, TANTO GET COMO POST E SUAS ATRIBUIÇÕES
Route::get('home/produtos', [ProdutoController::class, 'index'])->name('GetProdutos');
Route::post('home/produtos', [ProdutoController::class, 'index'])->name('PostProdutos');
Route::get('home/produtos/excluir/{id}', [ProdutoController::class, 'index'])->name('excluirProduto');

Route::fallback(function(){  
    echo "A rota não foi encontrada <a href='".route('paginaHome')."'>Clique aqui para voltar</a>.";
});







