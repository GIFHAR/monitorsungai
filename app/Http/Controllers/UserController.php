<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{


    public function user()
    {
        $users = User::all(); // Retrieve all users from the database

        return view('users', compact('users')); // Pass users data to the view
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }


}
