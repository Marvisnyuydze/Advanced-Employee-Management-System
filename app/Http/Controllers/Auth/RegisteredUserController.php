<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $t = $request->query('t');
        try {
            if($t == null || trim($t) == '') return redirect()->route('login');
            $user = User::where('registration_token', $t)->first();
            if ($user == null) return redirect()->route('login');
            return view('auth.register', ['user' => $user]);
        } catch(\Exception $e) {
            return redirect()->route('login');
        }
        return redirect()->route('login');
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
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        try {
            $user = User::where('email', $request->email)->first();
            if ($user == null) return redirect()->back();
            $user->password = Hash::make($request->password);
            $user->registration_token = null;
            $user->save();
            event(new Registered($user));

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        } catch(\Exception $e) {
            return redirect()->back();
        }
        return redirect()->back();
    }
}
