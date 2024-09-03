<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'user_name' => ['required', 'string', 'max:255'],
            'profile' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'religion' => ['required', 'string', 'max:255'],
            'lang' => ['required', 'string', 'max:255'],
            'm_number' => ['required|numeric'],
            'w_number' => ['required|numeric'],
            'occupation' => ['required', 'string', 'max:255'],
             'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
             'user_name' => $request->user_name,
            'profile_created_by' =>$request->profile,
            'gender' => $request->gender,
            'date_of_birth' => $request->dob,
            'marital_status' =>$request->status,
            'religion' =>$request->religion,
            'caste' =>$request->caste,
            'sub_caste' => $request->sub_caste,
            'mother_tongue' => $request->lang,
            'occupation' =>  $request->occupation,
            'monthly_income' =>  $request->icome,
            'mobile_number' =>  $request->m_number,
            'whatsapp_number' => $request->w_number,
            'confirm_password' =>$request->password_confirmation

        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
