<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function makeAdmin($userId)
    {
        $user = User::find($userId);

        if ($user) {
            // Update the user's role to 'admin'
            $user->update(['role' => 'admin']);

            return redirect()->route('admin.dashboard')->with('success', 'User is now an admin.');
        }

        return redirect()->route('admin.dashboard')->with('error', 'User not found.');
    }
}
