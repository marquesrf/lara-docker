<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

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

/* Route::get('/', function () {
    return 'Aprendendo Laravel!!';
}); */
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'principal'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'principal'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'principal'])->name('site.contato');
Route::get('/login', function() { return 'Login'; })->name('site.login');

// grupo de rotas privadas
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function() { return 'Produtos'; })->name('app.produtos');
});

// Redirecionamento de rotas (pode também ser feito no controller)
Route::redirect('/index', '/');

// Rota de fallback (404 amigável).
Route::fallback(function() {
    return 'Página não encontrada. <a href="'.route('site.index').'">Página Inicial</a>';
});

// Encaminhamento de parâmetros de rota para controller.
Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->where(['p1', 'p2'], '[0-9]+')->name('teste');

/*
// Rota com parâmetros (obrigatórios e opcionais) e com tratamento de expressões regulares
Route::get('/contato/{nome}/{categoria_id?}', function(string $nome, int $categoria_id = 1) {
    return  "Nome: $nome<br>Categoria: $categoria_id";
})->where('nome', '[A-Za-z]+')->where('categoria_id', '[0-9]+'); // exibe a rota apenas se os parâmetros passados forem do tipo correto.
 */
