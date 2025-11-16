<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Mime\Email;

class ApiController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed',
        ]);
        $user =User::create($request->all());
        return response()->json([
            'success'=>true,
            'massage'=>'Registion SuccessFull .',
            'data'=>$user
        ],201);
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $user = User::where('email',$request->email)->first();
        if(!$user){
            return response()->json([
                'error'=>true,
                'message'=>'Email Does not match!',
            ],401);     
        }else{
            if(Hash::check($request->password,$user->password)){
                $token =$user->createToken('api')->plainTextToken;
                return response()->json([
                    'success'=>true,
                    'message'=>'login SuccessFull.',
                    'data'=>$user,
                    'token'=>$token,
                ],201);
            }else{
                return response()->json([
                    'error'=>true,
                    'message'=>'Password Does Not Match',
                ],401);
            }
        }
    }
    public function logout(){
        // auth()->user->currentAccessToken()->delete();       //indivisully device logout
        auth()->user()->tokens()->delete();       //all device logout
        return response()->json([
            'success'=>true,
            'message'=>'logout SuccessFull',
        ]);
    }
}
