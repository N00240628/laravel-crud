<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListadoController;

Route::get('/', HomeController::class);

Route::get('listado', [ListadoController::class, 'index'])->name('listado.index');

Route::get('listado/almacenar', [ListadoController::class, 'create'])->name('listado.create');

Route::post('listado', [ListadoController::class, 'store'])->name('listado.store');

Route::get('listado/{vehiculo}', [ListadoController::class, 'show'])->name('listado.show');

Route::get('listado/{vehiculo}/editar', [ListadoController::class, 'edit'])->name('listado.edit');

Route::put('listado/{vehiculo}', [ListadoController::class, 'update'])->name('listado.update');

Route::delete('listado/{vehiculo}', [ListadoController::class, 'destroy'])->name('listado.destroy');

Route::get('/hora', function () {
    return now(); // o date('Y-m-d H:i:s')
});
