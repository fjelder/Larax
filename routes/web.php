<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContractController;
use Illuminate\Http\Request;
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

Route::get('/temp', function () {
    return view('template');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resources([
        'contracts' => ContractController::class,
    ]);
    Route::get('/jumpToContract', function (Request $request) {
        return redirect()->route('contracts.show', $request->id);
    })->name('jumpToContract');;
});
