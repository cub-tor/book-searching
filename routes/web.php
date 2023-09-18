<?php


use App\Http\Controllers\formularioControlador;
use Illuminate\Support\Facades\Route;
use App\Models\Libro;

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


/*Route::get('ajax', [formularioControlador::class, function ()
{
    return view('message');
}]);*/


Route::get('libros', [formularioControlador::class, 'listaLibros']);
Route::get('libros/buscar', [formularioControlador::class, 'consultar_libros']);
//Route::post('libros/consultar', [formularioControlador::class, 'consultar_libros']);//metodo get nor suported
//Route::match(['get', 'post'],'libros/consultar', [formularioControlador::class, 'consultar_libros']);//devuelve json
Route::get('libros/consultar', [formularioControlador::class, 'mostrar_formulario_consulta']);//carga la vista
Route::post('libros/consultar', [formularioControlador::class, 'consultar_libros']);//devuelve json
//Route::get('libros/consultar}', [formularioControlador::class, 'consultar_libros']);//not ofund
//Route::post('libros/consultar}', [formularioControlador::class, 'consultar_libros']);//not ofund
//Route::get('libros/consultar}', [formularioControlador::class, 'consultar_libros']);//not ofund
//Route::post('libros/consultar', [formularioControlador::class, 'consultar_libros']);

Route::get('libro', function (){
    $libro= Libro::first();
    echo $libro->titulo;
});

