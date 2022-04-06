<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|min:3|unique:users,username',
            'name'=> 'required|min:3|max:255|unique:users,name',
            'email' => 'required|email:dns|unique:users,email',
            'password'=> 'required|min:5'
        ]);
        // dd($validated);
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);

        // $request->session()->flash('notificationMessage', 'Registrasion successfull! please login');
        return redirect('/login')->with('notificationMessage', 'Registrasion successfull! please login');
    }
}
