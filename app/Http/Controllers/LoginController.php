<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login_proses(Request $request)
    {

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            $user = Auth::user();
            if ($user->level === 'admin') {
                return redirect()->route('admin')->with('pesan', 'Welcome, ' . $user->name);
            } elseif ($user->level === 'owner') {
                return redirect()->route('owner')->with('pesan', 'Welcome, ' . $user->name);
            } elseif ($user->level === 'kurir') {
                return redirect()->route('courier')->with('pesan', 'Welcome, ' . $user->name);
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Your Email and Password Combination is Wrong!');
        }
    }

    public function logout()
    {
        Auth::logout();

        session()->flush();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('login')->with('pesan', 'You have successfully logged out.');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
