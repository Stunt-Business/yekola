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
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        /**
         * Retrieve the valid user profile types
         */
        $validProfileTypes = array_keys(config("constants.profile_types"));
        return Inertia::render('Auth/Register', [
            "valid_profile_types" => $validProfileTypes
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password'     => ['required', 'confirmed', Rules\Password::defaults()],
            'profile_type' => ['required', 'string']
        ]);

        $user = User::create([
            'name'  => $validated['name'],
            'email' => $validated['email'],
            'password'     => Hash::make($validated['password']),
            'profile_type' => $validated["profile_type"]
        ]);

        // issue an event 
        event(new Registered($user));

        // authenticate the user
        Auth::login($user);

        // Redirect the user to the dashboard
        return redirect(route('dashboard', absolute: false));
    }
}
