<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class SessionController extends Controller
{
    public function create(): View
    {
        return view('sessions.create');
    }

    public function store(): RedirectResponse
    {
        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'username' => 'Your provided credentials could not be verified.',
            ]);
        }

        session()->regenerate();

        return redirect()->route('admin.quotes');
    }

    public function destroy(): RedirectResponse
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
