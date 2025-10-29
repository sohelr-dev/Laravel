<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function destroy($id){
        $user= User::find($id);
        $user->delete();
        // dd("Delete");
        return redirect()->route("users.index")->with('success',"User Delete SuccessFully !");
    }
    public function create(){
        $roles =Role::all();
        return view ("pages.users.create",compact('roles'));
        
    }
    public function store(Request $request){
        // dd($request->all());
        // $user =new User();
        // $user->first_name =$request->first_name;        //$user->table column name ,$request->form ar name
        // $user->email =$request->email;
        // $user->password =$request->password;
        // $user->role_id =$request->role_id;
        // $user->save();
        // dd($user);

        //another method

        //validation
        $request->validate(
            [
            'first_name'=>"required|min:2|max:5",
            // 'first_name'=>['required','mix:2','max:5']      //altanative
            'email'=>['required','email','unique:users'],
            'password'=>['required','min:6','confirmed'],
            ]
    );
        // dd($request->all());
        // Create the user
        User::create([
            'first_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // ✅ hash the password
            'role_id' => $request->role_id,
        ]);
            // $user->create();
            // dd($user);
            return redirect()->route('users.index')->with('success',"User Create Successfully !");

        
    }

    public function edit($id){
        $user =User::find($id);
        $roles =Role::all();
        $page =request('page',1);
        // dd($page);
        return view ("pages.users.edit",compact('roles','user','page'));
        
    }
    public function update(Request $request ,$id){
        // dd($request->all());

        $request->validate(
            [
            'first_name'=>"required|min:2|max:20",
            'email'=>['required','email','unique:users,email'],
            
            ]
        );

        // dd($request->all());

        
        $user =User::find($id);
        $user->update([
                'id'=>$request->id,
                'first_name'=>$request->first_name,
                'email'=>$request->email,
                'role_id'=>$request->role_id,
            ]);
            // dd($user);
            return redirect()->route('users.index',['page'=>request('page',1)])->with('success',"User Update Successfully !");
        
        }
}
