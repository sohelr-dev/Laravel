<?php

use Illuminate\Support\Facades\Route;
use App\Models\Trainee;
use App\Http\Controllers\TraineeController;

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

//for view 
Route::view('/about','pages.about');

//for controller


//for view

// Route::get('trainees',function(){
//     // $trainees=[
//     //     [
//     //       'name'=>"Sohel Rana",
//     //       'email'=> "sohel@gmail.com",
//     //       'phone'=>"01548574252",
//     //       'counrty'=>"BD",
//     //       "is_active"=> true,
//     //       'id'=>1
//     //     ],
//     //     [
//     //       'name'=>"Rahat Rana",
//     //       'email'=> "Rahat@gmail.com",
//     //       'phone'=>"01548574252",
//     //       'counrty'=>"USA",
//     //       "is_active"=> false,
//     //       'id'=>2
//     //     ],
//     //     [
//     //       'name'=>"Roxi Rana",
//     //       'email'=> "Roxi@gmail.com",
//     //       'phone'=>"01548574252",
//     //       'counrty'=>"UK",
//     //       "is_active"=> true,
//     //       'id'=>3
//     //     ]
//     // ];
//     return view('pages.trainee.index',[
//         'trainess'=>Trainee::all()
//     ]);
// });

Route::get('/trainees',[TraineeController::class,'index']);
Route::get('/trainee/{id}',[TraineeController::class,'show']);

//for controler


// Route::get('/trainee/{id}',function($id){

//     // $trainees=[
//     //     [
//     //       'name'=>"Sohel Rana",
//     //       'email'=> "sohel@gmail.com",
//     //       'phone'=>"01548574252",
//     //       'country'=>"BD",
//     //       "is_active"=> true,
//     //       'id'=>1
//     //     ],
//     //     [
//     //       'name'=>"Rahat Rana",
//     //       'email'=> "Rahat@gmail.com",
//     //       'phone'=>"01548574252",
//     //       'country'=>"USA",
//     //       "is_active"=> false,
//     //       'id'=>2
//     //     ],
//     //     [
//     //       'name'=>"Roxi Rana",
//     //       'email'=> "Roxi@gmail.com",
//     //       'phone'=>"01548574252",
//     //       'country'=>"UK",
//     //       "is_active"=> true,
//     //       'id'=>3
//     //     ]
//     // ];

//     // $single =collect($trainees)->firstWhere('id', $id);
//     //dd means dumb and die.
//     // dd($single);

//     //alternative

//     // $single1 =array_filter($trainees,fn($item)=>$item['id'] ==$id);
//     // $single = reset($single1);
//     // dd($single);

//     return view('pages.trainee.show',[
//         // 'id'=>$id,
//         "trainee"=>Trainee::readById($id)
//     ]);
// });



