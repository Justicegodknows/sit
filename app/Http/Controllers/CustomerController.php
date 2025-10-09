<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Author;

class CustomerController extends Controller
{
    // return all users/customers
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    // uses route-model binding: route parameter name should be {user}
    public function show(Author $user)
    {
        return view('authors.show', compact('user'));
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

        $user = Author::create($data);

        return view('authors.store', compact('user'));
    }
}
