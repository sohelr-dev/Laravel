<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index(){
    //     $users = User::select('*',"role_name")
    //     ->where("role_id",1)
    //     ->orderBy("id","desc")
    //     // ->get();    //all data like fetch_all
    //     ->first();    //only one  data like fetch_assoc
    //     // return view("pages.users.index",compact("users"));
    //     dd($users);
    // }


    // public function index(){
    //     //query Builder
    //     //$users = DB:table()
    //     //or
    //     $users = User::from('users as u')
    //     ->select('u.id as userId',"u.first_name","u.email","roles.name as roleName")
    //     ->join("roles","roles.id","=","u.role_id")
    //     // ->where("role_id",1)
    //     ->orderBy("u.id","desc")
    //     ->get();    //all data like fetch_all
    //     return view("pages.users.index",compact("users"));
    //     // dd($users);
    // }


    // public function index(){
    //     //query Builder
    //     //$users = DB:table()
    //     //or
    //     $users = User::from('users as u')
    //     ->select('u.id as userId',"u.first_name","u.email","roles.name as roleName")
    //     ->join("roles","roles.id","=","u.role_id")
    //     // ->where("role_id",1)
    //     ->orderBy("u.id","desc")
    //     ->paginate(5);  //skip,take,get all are include here
    //     return view("pages.users.index",compact("users"));
    //     // dd($users);
    // }


    // public function index(){
    //     //query Builder
    //     //$users = DB:table()
    //     //or
    //     $users = User::from('users as u')
    //     ->select('u.id as userId',"u.first_name","u.email","roles.name as roleName")
    //     ->join("roles","roles.id","=","u.role_id")
    //     // ->where("role_id",1)
    //     ->orderBy("u.id","desc")
    //     ->skip(5)       //prothem  5 ta skip kore baki gula show kore 
    //     // ->take(3)       //first 5 ta skip kore next 3 ta show kore 
    //     ->take(PHP_INT_MAX)       //first 5 ta skip kore all data show kore 
    //     ->get();
    //     return view("pages.users.index",compact("users"));
    //     // dd($users);
    // }
    public function index(){
        //query Builder
        //$users = DB:table()
        //or
        $users = User::from('users as u')
        ->select('u.id as userId',"u.first_name","u.email","roles.name as roleName")
        ->join("roles","roles.id","=","u.role_id")
        // ->where("role_id",1)
        ->orderBy("u.id","desc")
        ->paginate(7);
        return view("pages.users.index",compact("users"));
        // dd($users);
    }

    public function show($id){
        $user = User::from('users as u')
        ->select('u.id as userId',"u.first_name","u.email","roles.name as roleName")
        ->join("roles","roles.id","=","u.role_id")
        ->where("u.id","=",$id)
        ->first();    //
        return view("pages.users.show",compact("user"));
        // dd($user);
    }
}
