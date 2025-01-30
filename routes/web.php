<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*Route::get('/',[PageController::class,"index"]);*/
Route::get('/', [PageController::class, 'index'])->name('domu');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

   // Route::get('/pokemoni-pokemoni',[ PageController::class, 'adminPokemoni'])->name('admin.pokemoni');

   Route::post('/smazani-ukol/{id}',[PageController::class,'smazaniUkolu'])->name('smazUkol');

    Route::post('/pridani-ukol',[ PageController::class, 'pridatUkol'])->name('pridatUkol');
});


