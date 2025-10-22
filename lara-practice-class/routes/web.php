<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome',[
        'title'=>'SOHEL RANA',
        'country'=>'Banglaseh'
    ]);
});

// Route::get('/users/{queryid}',function($id){
//     return view('pages/users',[
//         'getId'=>$id
//     ]);
// });

// Route::get('/users/{username}/profile/{id}',function($username,$id){
//     return view('pages.users',[
//         'user'=>$username,
//         'id'=>$id
//     ]);
// });

Route::get('/users/{username}/profile/{id?}',function($username,$id=null){
    return view('pages.users',[
        'user'=>$username,
        'id'=>$id
    ]);
});

// Route::get('/about', function () {
//     return view('pages.about');
// });

//OR route same kaj


Route::view('/about','pages.about');
