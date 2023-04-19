<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tournéeController;
use App\Http\Controllers\commandesController;
use App\Http\Controllers\retourController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
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

Route::get('/', function () {
    return view('welcome');
});

//admin routes
Route::get('/dashboard', function () {
    if(!Gate::allows('access-admin')){
        return view('logout');
    }else{
        return view('dashboard');
    }
    
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get("/tournée", [tournéeController::class, "index"])->name('tournée.index');
Route::get("/admin/tournée", [tournéeController::class, "create"])->name('tournée.create');
Route::post("/admin/tournée", [tournéeController::class, "store"])->name("tournée.store");

Route::get("/user/commande", [commandesController::class, "create"])->name("commandes.create");
Route::post("/user/commande", [commandesController::class, "store"])->name("commandes.store");
Route::get ("/commandes", [commandesController::class, "index"])->name("commandes.index");
Route::get("/commades/{id_commande}", [commandesController::class, "destroy"])->name("commandes.destroy");

Route::get("/user/retour", [retourController::class, 'create'])->name("retour.create");
Route::post("/user/retour", [retourController::class, 'store'])->name("retour.store");
Route::get('/retour', [retourController::class, 'index'])->name("retour.index");
Route::get("retour/{id}", [retourController::class, 'destroy'])->name("retour.destroy");
Route::get("/dashboard", function(){
    return view("welcome");
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
