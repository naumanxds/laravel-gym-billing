<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register-user');
    }

    /**
     * Display the registration member view.
     *
     * @return \Illuminate\View\View
     */
    public function createMember()
    {
        return view('auth.register-member');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validationCriteria = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ];

        if ($request->user_type == User::ROLE_ADMIN) {
            $validationCriteria['password'] = 'required|string|confirmed|min:8';
            $role = Role::where('role_name', User::ROLE_ADMIN)->first();
        } else {
            $role = Role::where('role_name', User::ROLE_MEMBER)->first();
        }

        $request->validate($validationCriteria);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => (isset($request->password)) ? Hash::make($request->password) : null,
        ]));
        
        $role->users()->save($user);
            
        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
