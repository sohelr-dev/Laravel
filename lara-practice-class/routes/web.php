<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\UserController;
use App\Mail\RegisterConfirmationMail;
use App\Models\Role;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test-mail',function(){
//     Mail::to('sohelrana15809@gmail.com')->send(new RegisterConfirmationMail());
//     return 'Mail Sent';
// });

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

    Route::get("/users",[UserController::class,'index'])->name("users.index");
    // Route::get("/users",[UserController::class,'index'])->middleware('role:2,3')->name("users.index");   //single middleware
    Route::get("/users/create",[UserController::class,'create'])->name("users.create");
    Route::get("/users/edit/{id}",[UserController::class,'edit'])->name("users.edit");
    Route::patch("/users/{id}",[UserController::class,'update'])->name("users.update");
    Route::post("/users",[UserController::class,'store'])->name("users.store");
    Route::get("/users/user/{id}",[UserController::class,'show'])->name("user.show");
    Route::delete("/users/user/{id}",[UserController::class,'destroy'])->name("user.destroy");

    //by grouping

    // Route::middleware('role:1,3')->group(function (){
    //     Route::get("/users/create",[UserController::class,'create'])->name("users.create");
    //     Route::get("/users/edit/{id}",[UserController::class,'edit'])->name("users.edit");
    //     Route::patch("/users/{id}",[UserController::class,'update'])->name("users.update");
    //     Route::post("/users",[UserController::class,'store'])->name("users.store");
    //     Route::get("/users/user/{id}",[UserController::class,'show'])->name("user.show");
    //     Route::delete("/users/user/{id}",[UserController::class,'destroy'])->name("user.destroy");
    //     Route::get('/roles',[RoleController::class,'index'])->name("roles.index");
    //     Route::get('/roles/role/{id}',[RoleController::class,'show'])->name("roles.show");
        
    // });

    //another grouping indivisul controller not middleware

    // Route::controller(UserController::class)->group(function (){
    //     Route::get('/users','index')->name('users.index');
    //     Route::get('/users/create','create')->name('users.create');
    //     Route::get('/users/edit/{id}','edit')->name('users.edit');
    //     Route::get('/users/user/{id}','show')->name('users.show');
    //     Route::post("/users",'store')->name("users.store");


    // });



    Route::resource('roles',RoleController::class);
    // Route::resource('users',UserController::class);
    Route::resource('statuses',StatusController::class);

    //
    Route::resource('gallery',GalleryController::class)->except(['update','edit',]);

    // Route::resource('users',UserController::class)->middleware('role:2,3');

    
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
