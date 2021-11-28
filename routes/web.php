<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ComprasExport;


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

// Route::get('/', function () {
//     return redirect()->route('listar');
// });

Route::resource('listar', 'ConprasController');
Route::GET('actualizar/{usuario}', 'ConprasController@update');
Route::get('export', function (){
    return Excel::download(new ComprasExport, 'Compras.xlsx');
});


Auth::routes();

