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
            'noHP' => ['required','string','max:20','unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ],
        [
            'name.required' => 'Masukkan nama anda!',
            'noHP.required' => 'Masukkan Nomor HP anda!',
            'email.required' => 'Masukkan email anda!',
            'password.required' => 'Masukkan password anda!',
            'email.unique' => 'Email yang anda masukkan sudah terdaftar',
            'noHP.unique' => 'Nomor HP sudah terdaftar',
            'password.confirmed' => 'Password tidak sama'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'noHP' => $request->noHP,
            'role' => 'customer',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
        // $user->sendEmailVerificationNotification();

        return redirect(route('dashboard', absolute: false));
    }
}
