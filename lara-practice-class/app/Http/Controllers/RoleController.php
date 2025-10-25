<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view("pages.roles.index",compact("roles"));
    }
    public function show($id){
        $role = Role::find($id);
        return view("pages.roles.show",compact("role"));
    }
}
