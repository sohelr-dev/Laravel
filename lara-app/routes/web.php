<?php

use Illuminate\Support\Facades\Route;

Route::get('', function () {
    $studentId =5;
    $round = 65;
    return view('pages.welcom',[
        'id'=>$studentId,
        'round'=>$round
    ]);
});
Route::get('/about', function () {
    return view('pages.about');
});
