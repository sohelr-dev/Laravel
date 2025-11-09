<?php

namespace App\Http\Controllers;

use App\Models\Trainee;

class TraineeController
{
    public function index(){
        $trainess = Trainee::all();
        // return view('pages.about',compact('trainess'));
        return view('pages.trainee.index',[
            'trainess'=>$trainess
        ]);
        
    }
    public function show($id){
        $trainess = Trainee::readById($id);
        // return view('pages.about',compact('trainess'));
        return view('pages.trainee.show',[
            'trainee'=>$trainess
        ]);
        
    }
   
}
