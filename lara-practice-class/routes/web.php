<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //roles
    // Route::get('/roles',[RoleController::class,'index'])->name("roles.index");
    // Route::get('/roles/role/{id}',[RoleController::class,'show'])->name("roles.show");

    // Route::get("/users",[UserController::class,'index'])->name("users.index");
    // Route::get("/users/create",[UserController::class,'create'])->name("users.create");
    // Route::get("/users/edit/{id}",[UserController::class,'edit'])->name("users.edit");
    // Route::patch("/users/{id}",[UserController::class,'update'])->name("users.update");
    // Route::post("/users",[UserController::class,'store'])->name("users.store");
    // Route::get("/users/user/{id}",[UserController::class,'show'])->name("user.show");
    // Route::delete("/users/user/{id}",[UserController::class,'destroy'])->name("user.destroy");

    Route::resource('roles',RoleController::class);
    Route::resource('users',UserController::class);
    Route::resource('statuses',StatusController::class);
});

// web0
Route::get('d', function () {
    return view('pages.welcome',[
        'title'=>'SOHEL RANA',
        'country'=>'Banglaseh'
    ]);
});


Route::get('/users/{username}/profile/{id?}',function($username,$id=null){
    return view('pages.users',[
        'user'=>$username,
        'id'=>$id
    ]);
});

Route::view('/about','pages.about');
Route::get('/trainees',[TraineeController::class,'index'])->name("traine.index");


// Route::get('/roles/role/{id}',[RoleController::class,'show'])->name("roles.show");

// Route::get("/users",[UserController::class,'index'])->name("users.index");
// Route::get("/users/create",[UserController::class,'create'])->name("users.create");
// Route::get("/users/edit/{id}",[UserController::class,'edit'])->name("users.edit");
// Route::patch("/users/{id}",[UserController::class,'update'])->name("users.update");
// Route::post("/users",[UserController::class,'store'])->name("users.store");
// Route::get("/users/user/{id}",[UserController::class,'show'])->name("user.show");
// Route::delete("/users/user/{id}",[UserController::class,'destroy'])->name("user.destroy");

require __DIR__.'/auth.php';
