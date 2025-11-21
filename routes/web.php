<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('home');    
})->name('home');
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::get('/dashboard',[UserController::class,'home'])
->middleware(['auth', 'verified'])
->name('dashboard');

Route::prefix('admin')->middleware(['auth','admin'])->group(function(){
    Route::get('/dashboard',[UserController::class,'index'])->name('admin.dashboard');            
    //Route::get('/dashboard/createpost',[AdminController::class,'createpost'])->name('admin.createpost');
    Route::get('/dashboard/addpost',[AdminController::class,'addpost'])->name('admin.addpost');
     
});


/*
Route::get('admin/dashboard',[UserController::class,'index'])
->middleware(['auth', 'admin'])
->name('admin.dashboard');

Route::get('admin/dashboard/post',[UserController::class,'post'])
->middleware(['auth', 'admin']);
*/

/*
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin'])->name('admin.dashboard');
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
