<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('auth.register');
    }

    public function create(Request $request): Application|Redirector|RedirectResponse
    {
        $attributes = $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email', 'max:50'],
            'password' => ['required', Password::min(8), 'confirmed']
        ]);

        $user = User::create($attributes);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/');
    }
}
