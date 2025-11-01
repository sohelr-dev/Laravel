<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $roles =Role::all();
        return view('auth.register',compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'first_name'=>"required|min:2|max:25",
                // 'first_name'=>['required','mix:2','max:5']      //altanative
                'email'=>['required','email','unique:users'],
                'password'=>['required','min:6','confirmed'],
            ],
            // [
            //     'photo.mimes'=>'Image must be jpg,png,jpeg',
            //     'photo.dimensions'=>'Image dimensions must be 200x200',

            // ]
        );

        $user = User::create([
            'first_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // ✅ hash the password
            'role_id' => $request->role_id,
           
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
