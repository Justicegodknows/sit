<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    // return all users/customers
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    // uses route-model binding: route parameter name should be {user}
    public function show(User $user)
    {
        return response()->json($user);
    }

    // create a user (ensure User::$fillable includes these fields)
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        return response()->json($user, 201);
    }
}
